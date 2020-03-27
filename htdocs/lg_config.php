<?php isset($_CONFIG) or die('Não é permitido acesso direto.');

// ------------------------------------------------------------------------
// CONFIGURAÇÃO DO LOOKING GLASS
// ------------------------------------------------------------------------

/* Seu AS */
$_CONFIG['asn'] = '12345';

/* Nome da empresa */
$_CONFIG['company'] = 'Nome da Empresa';

/* URL do logo da empresa (ou FALSE) */
$_CONFIG['logo'] = 'lg_logo.gif';

/* Cor principal */
$_CONFIG['color'] = '#444444';

/* Tipo de comando para fazer uma conexão SSH (`plink' ou `sshpass') */
$_CONFIG['sshcommand'] = 'sshpass';

/* Putty `plink' comando (para conexão SSH) */
$_CONFIG['plink'] = '/usr/local/bin/plink';

/* sshpass comando (para conexão SSH) */
$_CONFIG['sshpass'] = '/usr/bin/sshpass';

/* URL IP whois serviço */
$_CONFIG['ipwhois'] = 'https://rdap.registro.br/ip/';

/* URL AS whois serviço */
$_CONFIG['aswhois'] = 'https://rdap.registro.br/autnum/';

/**
 * Routers
 *
 * Parametros:
 *	url          - URL formato: [ssh|telnet]://[login]:[password]@[host]:[port]
 *	pingtraceurl - URL endereço para ping e traceroute (or FALSE)
 *	description  - Descrição do router
 *	group        - Grupo do router (of FALSE)
 *	ipv6         - Suporta IPv6 (TRUE/FALSE)
 *	os           - Sistema do router (ios, mikrotik, quagga, junos, openbgpd, huawei)
 */
$_CONFIG['routers'] = array
(
        'exemplo_ixbr_sp' => array
        (
                'url' => 'telnet://lg.saopaulo.sp.ix.br:23',
                'pingtraceurl' => TRUE,
                'description' => 'IX.BR - SP',
                'group' => 'AS22548',
                'ipv6' => TRUE,
                'os' => 'quagga',
        ),

	'exemplo_eastlink' => array
	(
		'url' => 'telnet://route-server.eastlink.ca:23',
		'pingtraceurl' => FALSE,
		'description' => 'Example Router 2',
		'group' => 'AS12345',
		'ipv6' => TRUE,
		'os' => 'ios',
	),

/*
	'exemplo_optus' => array
	(
		'url' => 'ssh://192.168.0.1:2222',
		'pingtraceurl' => FALSE,
		'description' => 'Meu RouterOS',
		'group' => 'AS12345',
		'ipv6' => TRUE,
		'os' => 'mikrotik',
	),
*/
);
