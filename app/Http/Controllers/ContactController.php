<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $userId=auth()->user()->id;
        $contacts=Contact::where('user_id', $userId)->get();
        return response()->json([
            "status"=>true,
            "contacto"=>$contacts
        ], 200);
    }
    public function store(ContactRequest $request)
    {
        $userId=auth()->user()->id;
        $contact=Contact::create([
            "name"=>$request->name,
            'last_name'=>$request->last_name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'city'=>$request->city,
            'country'=>$request->country,
            'note'=>$request->notas,
            'user_id'=>$userId
            
        ]);
        return response()->json([
            'status'=> true,
            'message'=>'The contact '. $request->name.' has been entered successfully'
        ], 200);
    }
    public function show(string $id)
    {
        $contact=Contact::find($id);
        if($contact){
            return response()->json([
                "status"=>true,
                "contacto"=>$contact
            ], 200);
        }
        return response()->json([
            "status"=>false,
            "error"=>"contact does not exist on our servers"
        ], 500);
    }
    public function update(ContactRequest $request, Contact $contact)
    {
        $contact->update($request->all());
        return response()->json([
            'status'=>true,
            'message' => 'Contact successfully updated'
        ], 200);
    }
    public function destroy($contact)
    {
        $contacto= Contact::find($contact);
        if($contacto && $contacto->delete()){
            return response()->json([
                'status'=>true,
                'message' => 'Contact successfully deleted'
            ], 200);
        }
        return response()->json([
            'status'=> false,
            'error' => 'Could not delete contact'
        ], 500);
    }
}
