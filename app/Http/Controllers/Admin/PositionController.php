<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Position;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $positions = Position::get();
        return view('admin.pages.position.index',[
            'positions' => $positions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.position.create');
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
        
        Position::create($data);

        return redirect()->route('position.index')->with('process-success', 'Berhasil menambah data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $position = Position::findOrFail($id);
        return view('admin.pages.position.show',[
            'position' => $position
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
        $position = Position::findOrFail($id);

        return view('admin.pages.position.edit', [
            'position' => $position,
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

        $request->validate([
            'name' => 'required',
        ]);

        Position::findOrFail($id)->update($data);

        return redirect()->route('position.index')->with('process-success', 'Berhasil mengubah data!');
    }

    public function confirmation($id)
    {
        alert()->warning('Peringatan !', 'Data yang dihapus tidak bisa dikembalikan')
        ->showConfirmButton(
        '<form action="'. route('position.destroy', $id).'" method="POST" class="border-0">
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
        $data = Position::findOrFail($id);
        $data->delete();

        Alert::success('Success', 'Data berhasil dihapus');
        return redirect()->route('position.index')->with('process-success', 'Berhasil menghapus data!');
    }


    public function deleteAllConfirmation()
    {
        alert()->warning('Peringatan !', 'Anda akan menghapus semua data yang dipilih')
        ->showConfirmButton(
        '<button class="d-none" formaction="'.route('position.deleteAll').'" id="del2" ></button>'
        ,'#3085d6')->toHtml()
        ->showCancelButton('Batal', '#aaa')->reverseButtons();

        return back();
    }
    
    public function deleteAll(Request $request){
        $ids = $request->get('ids');

        if ($ids != null) {
            foreach ($ids as $id){
                $data = Position::find($id);
                $data->delete();
            }
            return redirect()->route('position.index')->with('process-success', 'Berhasil menghapus semua data!');
        } else {
            return redirect()->back();
        }
    }
}
