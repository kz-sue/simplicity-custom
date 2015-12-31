<?php //子テーマ用関数
// 親skins の取得有無の設定
function include_parent_skins(){
  return true; //親skinsを含める場合はtrue、含めない場合はfalse
}

//以下にSimplicity子テーマ用の関数を書く
add_image_size('thumb320',320,180,true);//320×180のサムネイルを作成
add_image_size('thumb480',480,270,true);//480×270のサムネイルを作成
add_image_size('thumb350',350,183,true);//350×183のサムネイルを作成
