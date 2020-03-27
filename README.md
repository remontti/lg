## PHP Looking Glass
Fork baseado em https://github.com/hsdn/lg

### Características gerais
- Suporte a Telnet e SSH (plink ou sshpass).
- Suporte a Cisco, MikroTik v5/v6, Juniper, Huawei (Comware), Quagga (Zebra) e OpenBGPD routers.
- Suppores aos protocolos IPv4 e IPv6.
- Conversão automática de IPs em sub-redes usando Merit RADb para MikroTik (http://www.ra.net/).
- Desenho do gráfico de patches do BGP AS usando o kit de ferramentas GraphViz.
- Funciona no php 5.2.0 e superiores.

### Requisitos de sistema
- php versão 5.2.0 e superior com soquetes e filtro (http://www.php.net/).
- Para as conexões SSH, é necessário **sshpass** ou Putty **plink** comando (http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html).
- Kit de ferramentas GraphViz para desenhar gráfico de caminhos BGP (http://www.graphviz.org/).
- php pear pacote Image_GraphViz (http://pear.php.net/package/Image_GraphViz).

#### Instalação no Debian 10 Buster (Simples e rápido)
<pre># apt install apache2 apache2-utils php libapache2-mod-php php-pear sshpass graphviz
# pear install Image_GraphViz-1.3.0
# cd /var/www/html/
# rm index.html
# wget https://github.com/remontti/lg/raw/master/htdocs/favicon.ico
# wget https://github.com/remontti/lg/raw/master/htdocs/lg_logo.gif
# wget https://raw.githubusercontent.com/remontti/lg/master/htdocs/index.php
# wget https://raw.githubusercontent.com/remontti/lg/master/htdocs/lg_config.php

Edite o **lg_config.php** com os parâmetros da sua infraestrutura.
</pre>

### Parâmetros de configuração
#### Configuração das variável 
- `$_CONFIG['asn']` - Seu número AS para exibição na página LG.
- `$_CONFIG['company']` - Sua empresa para exibição na página LG.
- `$_CONFIG['logo']` - O logotipo da sua empresa para exibição na página LG.
- `$_CONFIG['color']` - Cor principal dos elementos de design na página LG.
- `$_CONFIG['ipwhois']` - Endereço URL do serviço IP whois.
- `$_CONFIG['aswhois']` - Endereço URL do serviço AS whois.

#### Programs Configuration
- `$_CONFIG['sshcommand']` - Tipo de comando para fazer uma conexão SSH (você pode usar *plink* ou *sshpass*).
- `$_CONFIG['plink']` - Caminho para **plink** comando se você usá-lo (para conexão SSH).
- `$_CONFIG['sshpass']` - Caminho para **sshpass** comando se você usá-lo (para conexão SSH).

#### Configuração dos Routers
A configuração dos roteadores é especificada como matriz no parâmetro `$_CONFIG['routers']` com o seguinte formato:
```php
$_CONFIG['routers'] = array
(
    'router1' = array
    (
        // Router parameters
    ),
    'router2' = array
    (
        // Router parameters
    ),
    // etc.
);
```

##### Parâmetros Router:
- `url` - Endereço URL em formato: **[ssh|telnet]://[login]:[password]@[host]:[port]**.
- `pingtraceurl` - Endereço URL para ferramentas de ping e traceroute para roteadores Quagga (ou * FALSE *).
- `description` -Descrição do roteador.
- `group` - Nome do grupo de roteadores - AS (ou *FALSE*).
- `ipv6` - Suporte IPv6 (*TRUE* ou *FALSE*).
- `os` - Tipo do Router (*ios*, *mikrotik*, *quagga,* *junos*, *openbgpd*, *huawei*).

### Demonstração
- http://dev.hsdn.org/lg/
- http://lg.campus-rv.net/
- http://lg.lankabell.com/

#### Gráfico da demonstração com patch BGP AS
- http://dev.hsdn.org/lg/?command=graph&protocol=ipv4&query=8.8.8.8&router=example1

### Licença
    Espelho HSDN

    Copyright (C) 2012-2019 Information Networks Ltd.
    Direitos autorais (C) 2000-2002 Cougar
    Direitos autorais (C) 2014 Regional Networks Ltd.

    Este programa é um software gratuito: você pode redistribuí-lo e / ou modificar
    sob os termos da Licença Pública Geral GNU, publicada pela
    Free Software Foundation, versão 3 da Licença ou
    (a seu critério) qualquer versão posterior.

    Este programa é distribuído na esperança de que seja útil,
    mas SEM QUALQUER GARANTIA; sem sequer a garantia implícita de
    COMERCIALIZAÇÃO ou ADEQUAÇÃO PARA UMA FINALIDADE ESPECÍFICA. Veja o
    GNU General Public License para mais detalhes.

    Você deveria ter recebido uma cópia da Licença Pública Geral GNU
    junto com este programa. Caso contrário, consulte <http://www.gnu.org/licenses/>.
