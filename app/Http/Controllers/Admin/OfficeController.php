<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Office;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offices = Office::get();
        return view('admin.pages.office.index', compact('offices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinsi = DB::table('indonesia_provinces')->get();
        $kabupaten = DB::table('indonesia_cities')->get();
        return view('admin.pages.office.create', compact('provinsi', 'kabupaten'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'name' => 'required',
        ]);
        
        Office::create($data);

        return redirect()->route('office.index')->with('process-success', 'Berhasil menambah data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $office = Office::findOrFail($id);
        return view('admin.pages.office.show', [
            'office' => $office,
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
        $office = Office::findOrFail($id);
        $provinces = DB::table('indonesia_provinces')->get();
        $cities = DB::table('indonesia_cities')->get();
        return view('admin.pages.office.edit',[
            'office' => $office,
            'provinces' => $provinces,
            'cities' => $cities,
            ]
        );
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

        Office::findOrFail($id)->update($data);

        return redirect()->route('office.index')->with('process-success', 'Berhasil mengubah data!');
    }

    public function confirmation($id)
    {
        alert()->warning('Peringatan !', 'Data yang dihapus tidak bisa dikembalikan')
        ->showConfirmButton(
        '<form action="'. route('office.destroy', $id).'" method="POST" class="border-0">
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
        Office::findOrFail($id)->delete();

        return redirect()->route('office.index')->with('process-success', 'Berhasil menghapus data!');
    }

    public function deleteAll(Request $request){
        $ids = $request->get('ids');

        if ($ids != null) {
            foreach ($ids as $id){
                $data = Office::find($id);
                $data->delete();
            }
            return redirect()->route('office.index')->with('process-success', 'Berhasil menghapus semua data yang terpilih!');
        } else {
            return redirect()->back();
        }
    }
}
