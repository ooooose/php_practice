<?php

namespace App\Http\Controllers;

use App\Services\ContactServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreContactRequest;

class ContactController extends Controller
{
    private ContactServiceInterface $contactService;

    public function __construct(ContactServiceInterface $contactService)
    {
        $this->contactService = $contactService;
    }


    /**
     * お問合せの一覧を取得するメソッドです。
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = $this->contactService->getContacts();
        return view('contacts.index', compact('contacts'));
    }

    /**
     * お問合せフォームを表示するためのメソッドです。
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // セレクトボックス用に渡す変数を用意。
        $departments = $this->contactService->getDepartments();
        return view('contacts.create', compact('departments'));
    }

    /**
     * お問合せフォームに入力したデータを保存するメソッドです。
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactRequest $request)
    {
        DB::transaction(function () use ($request) {
            $this->contactService->createContact(
                $request->department_id, $request->name, $request->email, $request->content, $request->age, $request->gender
            );
        });

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
