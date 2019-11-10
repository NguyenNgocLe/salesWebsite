<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GoiCredit;
class GoiCreditController extends Controller
{
    public function index()
    {
        // trả về danh sách các gói credit
        $goiCredits = GoiCredit::all();
        return view('goi-credit.danh-sach', compact('goiCredits'));
    }

    public function create()
    {
        // hien thi form them goi credit
        return view ('goi-credit.them-moi');
    }

    public function store(Request $request)
    {
        // them goi credit tren database
        $goiCredit = new GoiCredit();
        $goiCredit->ten_goi = $request->ten_goi;
        $goiCredit->credit = $request->credit;
        $goiCredit->so_tien = $request->so_tien;
        $goiCredit->save();
        return redirect()->route('goi-credit.danh-sach');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        // hiển thị form edit goi-credit
        $goiCredit = GoiCredit::find($id);
        return view('goi-credit.them-moi', compact('goiCredit'));
    }

    public function update(Request $request, $id)
    {
        // cập nhật gói credit theo id vào database
        $goiCredit = GoiCredit::find($id);
        $goiCredit->ten_goi = $request->ten_goi;
        $goiCredit->credit = $request->credit;
        $goiCredit->so_tien = $request->so_tien;
        $goiCredit->save();
        return redirect()->route('goi-credit.danh-sach');
    }

    public function destroy($id)
    {
        // cập nhật trạng thái deleted vào database ẩn item trên danh sách
        $goiCredit = GoiCredit::find($id);
        $goiCredit->delete();
        return redirect()->route('goi-credit.danh-sach');
    }
}
