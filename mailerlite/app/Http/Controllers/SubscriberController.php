<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditSubscriberRequest;
use App\Http\Requests\SubscriberRequest;
use App\Models\ConfigMailerLite;
use Illuminate\Http\Request;
use MailerLite\MailerLite;
use Carbon\Carbon;
use Illuminate\Support\Facades\Artisan;

class SubscriberController extends Controller
{
    private function getMailerLiteClient(){

        $configMailerLiteClient = ConfigMailerLite::first();
        $apikey = $configMailerLiteClient->apikey;
        $mailerLiteClient = new MailerLite(['api_key' => $apikey]);

        return $mailerLiteClient;
    }

    public function index($cursor)
    {

        $mailerLite = $this->getMailerLiteClient();

        $response = $mailerLite->subscribers->get([
            'limit' => 5,
            'cursor' => $cursor
        ]);

    

        if($response['status_code'] != 200){
            return redirect()->route('subscribers.index',1)->with('danger', 'An error has been occurred');
        }

        $dataBody = $response['body']['data'];
        $subscriptorList = [];

        foreach ($dataBody as $key => $subscriptor) {
            $subscriptorList[$key] = [
                'name' => $subscriptor['fields']['name'],
                'country' => $subscriptor['fields']['country'],
                'email' => $subscriptor['email'],
                'subscribed_at_date' => Carbon::createFromFormat('Y-m-d H:i:s', $subscriptor['subscribed_at'])->format('d/m/Y'),
                'subscribed_at_time' => Carbon::createFromFormat('Y-m-d H:i:s', $subscriptor['subscribed_at'])->format('H:i:s'),
                'id' => $subscriptor['id']
            ];
        }

        $prev_cursor = $response['body']['meta']['prev_cursor'];
        $next_cursor = $response['body']['meta']['next_cursor'];

        $data = [
            'table' =>  $subscriptorList,
            'prev_cursor' => $prev_cursor,
            'next_cursor' => $next_cursor
        ];

        return view('subscribers.index',$data);
    }

    public function create()
    {
        return view('subscribers.create');
    }

    public function store(SubscriberRequest $request)
    {

        $name = $request->validated('name');
        $email = $request->validated('email');
        $country = $request->validated('country');

        $mailerLite = $this->getMailerLiteClient();

        $data = [
            'fields' => [
                'name' => $name,
                'country' => $country
            ],
            'email' => $email,
        ];


        $response = $mailerLite->subscribers->create($data);

        $status = $response['status_code'];
        if ($status == 200) {
            return redirect()->route('subscribers.index',1)->with('warning', 'Subscriber already exists');
        } elseif ($status == 201) {
            return redirect()->route('subscribers.index',1)->with('success', 'Subscriber created successfully');
        } else {
            return redirect()->route('subscribers.index',1)->with('danger', 'An error has been occurred');
        }
    }

    public function edit($id)
    {


        return view('subscribers.edit', [
            'id' => $id
        ]);
    }

    public function update(EditSubscriberRequest $request, $id)
    {

        $mailerLite = $this->getMailerLiteClient();

        $subscriberId = $id;

        $name =  $request->validated('name');
        $country =  $request->validated('country');

        $data = [
            'fields' => [
                'name' => $name,
                'country' => $country
            ]
        ];


        $response = $mailerLite->subscribers->update($subscriberId, $data);

        return back()->with('success', 'Subscriber updated successfully');


    }

    public function destroy($id)
    {
        $mailerLite = $this->getMailerLiteClient();

        $subscriberId = $id;

        $response = $mailerLite->subscribers->delete($subscriberId);

        return redirect()->route('subscribers.index',1)->with('succcess', 'Subscribed deleted succesfully');

        
    }

    public function home()
    {
        return redirect()->route('subscribers.index',1);
    }


}
