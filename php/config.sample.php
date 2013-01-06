<?php
//---------------------------------------------------//
// デバックモード(true で「する」、falseで「しない」 //
//---------------------------------------------------//
define("DEBUG",true);
//---------------------------------------------------//

//---------------------------------------------------//
// DBEngin 選択
//---------------------------------------------------//
//define("DBENGIN","mysql");
define("DBENGIN","postgres");

//---------------------------------------------------//
// DB 接続系定数
//---------------------------------------------------//
 define("DBHOST"        ,"Server Address");
 define("DBNAME"        ,"DataBase Name" );
 define("DBUSER"        ,"User"          );
 define("DBPASS"        ,"PassWord"      );
 define("TABLE_PREFIX"  ,"hp_"           );


//---------------------------------------------------//
// ディレクトリ定数
//---------------------------------------------------//
 define("DIR"    ,"/Document_Root"); 
 define("HOME"   ,"/home"         ); //705
 define("IMG"    ,HOME."/img"     ); //705
 define("JS"     ,HOME."/js"      ); //705
 define("CSS"    ,HOME."/css"     ); //705 
 define("DATA"   ,HOME."/data"    ); //700 
 define("LOG"    ,HOME."/log"     ); //700 

//---------------------------------------------------//
// ファイル定数
//---------------------------------------------------//
 define("CORPNAME",""               );
 define("LOGO"    ,IMG."logo.jpg"   );
 define("FAV"     ,IMG."favicon.ico");
 define("JQNAME"  ,JS."jquery.js"   );


//---------------------------------------------------//
// テーブル列名定数
//---------------------------------------------------//
 define("IDCOL","id"   ); //ID列
 define("IDATE","idate"); //作成日時
 define("CDATE","cdate"); //更新日時

 if(DBENGIN=="mysql"){
  define("IDSQL"," ".IDCOL." int auto_increment primary key");//MySQL
 }
 else if(DBENGIN=="postgres"){
  define("IDSQL"," ".IDCOL." serial not null primary key");//Postgres
 }
 define("IDATESQL"," ".IDATE." timestamp not null default current_timestamp");
 define("CDATESQL"," ".CDATE." timestamp null");



//------------------------------------------------------------//
// テーブル情報(テーブル作成時に「id」列などが自動で付加される
// indexに数字をセットするとテーブル作成時にCreate Indexが実行される
//
//       "col_a"=>array(  "type"   =>"[int|float|varchar(x)|date|etc..]"
//                       ,"null"   =>"[null | not null]"
//                       ,"default"=>"defalut value"
//                       ,"local"  =>"local column name"
//                       ,"index"  =>[0-xx]"
//                     ) // colA
//
//------------------------------------------------------------//
 $TABLES=array( 
//     "table_a"=>array( 
//         "col_a"=>array(      "type"   =>"int"
//                             ,"null"   =>"not null"
//                             ,"default"=>"0"
//                             ,"local"  =>"A列"
//                             ,"index"  =>"1"
//                      ) // col_a
//        ,"col_b"=>array(      "type"   =>"varchar(255)"
//                             ,"null"   =>"null"
//                             ,"default"=>""
//                             ,"local"  =>"B列"
//                             ,"index"  =>"0"
//                      ) // col_b
//                    ) // "table_a"
              );//$TABLES

//------------------------------------------------------------//
// CSV列情報(CSVはテーブル名と同じファイル名とする)
//------------------------------------------------------------//
 $CSVCOL=array(                                 
 /*
   "TableA"=>array("colA","colB")
  ,"TableB"=>array("colB","colA")
 */
              );//$CSVCOL
?>
