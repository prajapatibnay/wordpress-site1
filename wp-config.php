<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', "rogerio" );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', "root" );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', "" );

/** MySQL のホスト名 */
define( 'DB_HOST', "localhost" );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rrVWoUx&EJk*~qm1JC}lJ?%2w,&sm[a5Vxu6d|6js_K#WYec<X:`E~TH{.dn7EH-' );
define( 'SECURE_AUTH_KEY',  'wE9-?]5Mq9eh!Qma>_[ 3Z 0RKZ]DqoHTCt^Rhw&f<Q_7o3>L(N`.19|:litVk-8' );
define( 'LOGGED_IN_KEY',    ')XM}_ZSW,Ie|SahL68[c!Z[5pB[@ew/9r@~YA=b5BN+n~08n9#fIVU<X2k0^VkZA' );
define( 'NONCE_KEY',        'MC0rc88,odwx,Jh2{l$*;-KkYvR#MxxluEC8w%h1oZf,h0hBAS{HJ6<sgV2b2s]<' );
define( 'AUTH_SALT',        'TOg e?fV29z)y>Zf/];wcRJRD,^, N%AE=8!U<03ebJmL,8u7s@0Ud=mP{1p8GsG' );
define( 'SECURE_AUTH_SALT', '=|iesbOp9,On:$}{iE[/ai@js|qq##i6~V;),-?&eRB@p:#:zW-;xp0z`<6TIq*E' );
define( 'LOGGED_IN_SALT',   'lnUF{L<Yi;Uwufv5F$RlGXHnDx6Gj^I%Q8i)~2@Z%#NgNTx<oW 5mGdzO8N]JHdl' );
define( 'NONCE_SALT',       '1Yw4oh[17$E-}^*N<sg?76A=oQO)^gx4;`?V-z3|/&P!:trJMS;htc$!MduhoJQ+' );
define( 'WP_CACHE_KEY_SALT', 'XKMZlJllaSv^N0reOwTsn(}:9K{J=SA%)aO79Pkeztn9k!%tTEY)Oq844.J  G1,' );
/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
