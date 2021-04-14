<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use DB;
use App\Models\Data_arsip;
 
class DataarsipController extends Controller
{
    public function index()
    {
        //mengambil data dari table data_mahasiswa
        $index = DB::table('data_arsip')->paginate(10);
            
        //mengirim data pegawai ke view index
        return view('arsip.index',['data_arsip' => $index]);
    }

    public function tambah()
    {
        //memanggil view tambah
        return view ('arsip.tambah');
    }

   // method untuk insert data ke table pegawai
    public function proses(Request $request)
    {
	// insert data ke table pegawai
	DB::table('data_arsip')->insert([
		'nama' => $request->nama,
		'nip' => $request->nip,
		'nik' => $request->nik,
        'alamat' => $request->alamat,
        'tanggal_lahir' => $request->tanggal_lahir,
        'tempat_lahir' => $request->tempat_lahir,
        'jenis_kelamin' => $request->jenis_kelamin,
        'ibu_kandung' => $request->ibu_kandung,
        'jabatan' => $request->jabatan,
		'unit_penempatan' => $request->unit_penempatan
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/arsip');
    }

    public function edit($id)
    {
        //mengambil data pegawai berdasarkan id yang dipilih
        $arsip = DB::table('data_arsip')->where('id',$id)->get();
        //passing data pegawai yang didapat ke view edit.blade.php
        return view ('arsip.edit',['data_arsip' => $arsip]);
    }

    //update data pegawai
    public function update(Request $request)
    {
        //update data mahasiswa
        DB::table('data_arsip')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'ibu_kandung' => $request->ibu_kandung,
            'jabatan' => $request->jabatan,
            'unit_penempatan' => $request->unit_penempatan
        ]);
        // kembali ke halaman data mahasiswa
        return redirect('/arsip');
    }

    public function hapus($id)
    {
        //menghapus data mahasiswa berdasarkan id yang dipilih
        DB::table('data_arsip')->where('id',$id)->delete();

        //alihkan halaman ke halaman pegawai
        return redirect ('/arsip');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$pencarian = DB::table('data_arsip')
		->where('nama','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('arsip.index',['data_arsip' => $pencarian]);
 
	}
}