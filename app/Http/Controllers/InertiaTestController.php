<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\InertiaTest;

class InertiaTestController extends Controller
{
    public function index() {
        return Inertia::render('Inertia/Index', [
            // InertiaTest::all() テーブルすべての情報を取得
            'blogs' => InertiaTest::all()
        ]);
    }

    public function create() {
        return Inertia::render('Inertia/Create');
    }

    public function show($id) {
        // ddでLaravel側のでのデバッグ
        // dd($id);

        return Inertia::render('Inertia/Show',
        [
            'id' => $id,
            'blog' => InertiaTest::findOrFail($id)
        ]);
    }

    public function store(Request $request) {
        // $requestでinputタグに入力した値を変数で受けとることができる。

        // バリデーション処理
        $request->validate([
            'title' => ['required', 'max:20'],
            'content' => ['required'],
        ]);

        // 上記のuse文のモデルのインスタンス化
        $inertiaTest = new InertiaTest;
        $inertiaTest->title = $request->title;
        $inertiaTest->content = $request->content;
        $inertiaTest->save();

        // Laravelにてリダイレクト処理
        // ->withでフラッシュメッセージを渡す
        return to_route('inertia.index')->with([
            'message' => '登録しました。'
        ]);
    }

    public function delete($id) {

        // $book 1件だけの情報指定
        $book = InertiaTest::findOrFail($id);
        // 1件だけ削除 Laravelの機能
        $book->delete();

        return to_route('inertia.index')->with([
            'message' => '削除しました。'
        ]);
    }
}
