pre記法は整形済みテキストを書くための記法。

HTMLでいうpreタグである。preタグはPreformatted Text(整形済みテキスト)の略で、
pre~/preタグで囲まれた範囲のソースに記述されたスペース、改行などを、そのまま等幅フォントで表示します。
(等幅フォント：全ての文字が同じ幅になっているフォント)

pre記法
pre〜/preタグで囲みます。

記述例

タグを使わずに書いた場合  
class Hoge
  def hoge
    print 'hoge'
  end
end

preタグで囲んだ場合
<pre>
class Hoge
      def hoge
        print 'hoge'
      end
end
</pre>

全ての行に5つ以上の半角スペースか2つ以上のタブスペースをつけても同じように書ける。

