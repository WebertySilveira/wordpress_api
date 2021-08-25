<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$}(;3@8C21d.#yY)d544J-zT/3~BDKp@tb$2YD?q]i>DLW|:]eWLou<Bk2]ms6}8' );
define( 'SECURE_AUTH_KEY',  '1$YGB%<bF!D@BXnS:Zz;ZL4|+Y+vF_V@+D1P]$9Q~}-j=DW9<v`1Uky]ORj~d+O%' );
define( 'LOGGED_IN_KEY',    'Rlf1i#TFzaBX[aG2seTWia4lVsH[rqic!YUsyvCn7T!Ryfu^z3P1bOtK)J.TyWy}' );
define( 'NONCE_KEY',        'CrR:a*z?!,1fbY+55C6[aiKE|-)8DjH}}+[A+eb>)15&fOglbr)1Ru&&3vVjq1 U' );
define( 'AUTH_SALT',        '0?b`I5Om?={Y@gqdpDIHAQkj@C_cSsqOPlMhg;:YHEmEnl7twCB/1u6fm|!Di2[F' );
define( 'SECURE_AUTH_SALT', 'A&v><iQ5NF9 A5cGm+a%QSS+_;9Q&?Er*,x5tj|q(mo!M==aErWXcwA$2ilq6Ip2' );
define( 'LOGGED_IN_SALT',   'eRklxRx/nm7b7`QL(`$v4!0gzc/. A~<9Pv~:T^}aCvx~.]Iu-qo(d]gVkF&8d*|' );
define( 'NONCE_SALT',       '*wT$/N<W8LjoDK{1gVW*&[P,*;oD.Xm+5@#]9)i .%McrHJpY[qcK%E`c_N/41`<' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
