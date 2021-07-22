<?php
 
require_once('vendor/autoload.php');
 
// 実行コマンド
// vendor/bin/phpunit test(ここはテストが置いてあるディレクトリを指定)

// 各テストケースごとに
// 1
// $sample = new Sample\Sample();
// を呼び出している。

// 今回はコンストラクタに引数を取らないクラスでテストを行ったが、これが長ったらしい引数を取るような場合だといささか面倒である。

// そこで setUp メソッドを定義して各テストケースの実行前に自動的に実行されるようにする。
// そのために行う事
// ⇒やり方はSampleTest.phpに書いてある


class SampleTest extends PHPUnit\Framework\TestCase {
    public function test_add() {
        $sample = new Sample\Sample();
        $this->assertEquals(10, $sample->Add(4, 6));
    }
 
    public function test_sub() {
        $sample = new Sample\Sample();
        $this->assertEquals(1, $sample->Sub(7, 6));
    }
}