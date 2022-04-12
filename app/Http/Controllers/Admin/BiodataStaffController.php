<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BiodataStaff;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BiodataStaffController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        return view('admin.pages.biodata.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.biodata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $biodata = BiodataStaff::create([
            'full_name' => $request->full_name,
            'nik' => $request->nik,
            'birth_date' => $request->birth_date,
            'education' => $request->education,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number,
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'biodata_staff_id' => $biodata->id,
            'role' => $request->role,
        ]);

        return redirect()->route('biodata.index')->with('process-success', 'Berhasil menambah data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.pages.biodata.show',[
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $provinces = DB::table('indonesia_provinces')->get();
        $cities = DB::table('indonesia_cities')->get();
        return view('admin.pages.biodata.edit',[
            'user' => $user,
            'cities' => $cities,
            'provinces' => $provinces,
        ]);
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
        $data = $request->all();

        BiodataStaff::findOrFail($id)->update($data);

        return redirect()->route('biodata.index')->with('process-success', 'Berhasil mengubah data!');
    }

    public function confirmation($id)
    {
        alert()->warning('Peringatan !', 'Data yang dihapus tidak bisa dikembalikan')
        ->showConfirmButton(
        '<form action="'. route('biodata.destroy', $id).'" method="POST" class="border-0">
            ' . method_field('delete') . csrf_field() . '
            <button type="submit"
                style="border: none; background-color: #3085d6; color: #fff;"
            >
                Hapus
            </button>
        </form>','#3085d6')->toHtml()
        ->showCancelButton('Batal', '#aaa')->reverseButtons();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BiodataStaff::findOrFail($id)->delete();
        User::where('biodata_staff_id', '=', $id)->delete();
        return redirect()->route('biodata.index')->with('procces->success', 'Berhasil menghapus data');
    }
}
