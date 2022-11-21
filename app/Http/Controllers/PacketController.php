<?php

namespace App\Http\Controllers;

use App\Models\Packet;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class PacketController extends Controller
{
    /**
     * validation request of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function validatedData(Request $request)
    {
        $validateData = $request->validate([
            'packetName' => 'required|max:50|min:3',
            'packetPrice' => 'required|max:255',
            'packetDes' => 'required|max:255'
        ]);

        return $validateData;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('packet.index', [
            'packets' => Packet::all()->sortBy('packetName')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('packet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $this->validatedData($request);

        Packet::create($validateData);

        return redirect('/packet')->with('success', "Paket $request->packetName Berhasih Ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Packet  $packet
     * @return \Illuminate\Http\Response
     */
    public function show(Packet $packet)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Packet  $packet
     * @return \Illuminate\Http\Response
     */
    public function edit(Packet $packet)
    {
        return view('packet.edit', [
            'packet' => $packet
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Packet  $packet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Packet $packet)
    {
        $validateData = $this->validatedData($request);

        Packet::where('id', $packet->id)->update($validateData);

        return redirect('/packet')->with('success', "Paket $request->packetName Berhasih Diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Packet  $packet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Packet $packet)
    {
        $packet->delete();

        return back()->with('success', "paket $packet->packetName berhasil dihapus!");
    }
}
