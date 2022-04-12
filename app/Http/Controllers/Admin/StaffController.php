<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Office;
use App\Models\Position;
use App\Models\Shift;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::get();
        return view('admin.pages.staff.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::get();
        $positions = Position::get();
        $offices = Office::get();
        $shifts = Shift::get();
        return view('admin.pages.staff.create',[
            'users' => $users,
            'positions' => $positions,
            'offices' => $offices,
            'shifts' => $shifts,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role_user = User::where('id', '=', $request->user_id);
        $role = $role_user->pluck('role')->first();

            $code = Staff::max('id_staff');
            $urutan = (int) substr($code, 4, 5);
            $urutan++;
            $code = sprintf("%05s", $urutan);
            
            if ($role  === 'owner') {
                $request->id_staff = 'OWN-' . $code;
            } elseif($role === 'manager') {
                $request->id_staff = 'MNG-' . $code;
            } else {
                $request->id_staff = 'STF-' . $code;
            }
        
        Staff::create([
            'id_staff' => $request->id_staff,
            'user_id' => $request->user_id,
            'position_id' => $request->position_id,
            'office_id' => $request->office_id,
            'shift_id' => $request->shift_id,
            'work_plan_id' => $request->work_plan_id,
        ]);

        return redirect()->route('staff.index')->with('proccess-success', 'Berhasil menambah data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $staffs = Staff::findOrFail($id);
        return view('admin.pages.staff.show',[
            'staffs' => $staffs,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::get();
        $staffs = Staff::findOrFail($id);
        $positions = Position::get();
        $offices = Office::get();
        $shifts = Shift::get();
        return view('admin.pages.staff.edit',[
            'users' => $users,
            'staffs' => $staffs,
            'positions' => $positions,
            'offices' => $offices,
            'shifts' => $shifts,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        Staff::findOrFail($id)->update($data);

        return redirect()->route('staff.index')->with('process-success','Berhasil mengubah data!');
    }


    public function confirmation($id)
    {
        alert()->warning('Peringatan !', 'Data yang dihapus tidak bisa dikembalikan')
        ->showConfirmButton(
        '<form action="'. route('staff.destroy', $id).'" method="POST" class="border-0">
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
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Staff::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('process-success', 'Berhasil menghapus data!');
    }

    public function deleteAll(Request $request){
        $ids = $request->get('ids');

        if ($ids != null) {
            foreach ($ids as $id){
                $data = Staff::find($id);
                $data->delete();
            }
            return redirect()->route('staff.index')->with('process-success', 'Berhasil menghapus semua data yang terpilih!');
        } else {
            return redirect()->back();
        }
    }
}
