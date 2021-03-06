# Springy framework update history

## Version 4

## 4.3
- Implements CGI mode;
- Breaks compatibility with PHP 7.2 or older;
- Small adjustments and enhancements.

## 4.2.2
- Deprecated css_dir, js_dir, images_dir and swf_dir entries from uri configuration;
- Removed urlJS, urlCSS, urlIMG e urlSWF template variables.

## 4.2.1
- Fixed SendGrid SDK version;
- Other enhancements and adjustments.

## 4.2.0
- Fixed bug in Kernel::delIgnoredError;
- PSR fixes in URI class;
- Method URI::http_host renamed to camel case format URI::httpHost

### 4.1.0
- New method templateObject in Template;
- Implemented retries in connection fails for DB;
- Implemented when conditional for embedded objects;
- SendGrid driver updated to support SendGrid SDK v6;
- Components script rebuilt;
- DB class updated to PHP 7.2 compatibility;
- Cookie class updated to PHP 7.2 compatibility;
- Removed following configuration entries:
  + system.cache,
  + system.css_path,
  + system.js_path,
  + system.controller_path;
- Removed support to PHP 5.6 or older;
- DB methods deprecated:
  + disableReportError,
  + enableReportError,
  + transactionAllRollBack,
  + num_rows,
  + get_all,
  + disableReportError,
  + enableReportError,
  + dateToTime,
  + dateToStr;
- Bug fix in Srints::cnpj method;
- Bug fix in _system_bug_ magic endpoint;
- Bug fix in Debug;
- Deprecated classes:
  + DBDelete,
  + DBExpression,
  + DBFiltro,
  + DBInsert,
  + DBSelect,
  + DBUpdate,
  + DBWhere.

### 4.0.0
- cmd.php changed to be a *nix command line executable script (must run "chmod ug+x" to works);
- Added a template property into Controller class;
- Added option to embed in load method of Model;
- Adjustment of Validador class to use multibyte string funcion;
- Bug fix in _Main.php to prevent execution trying of a non public function in controllers;
- Bug fix in Debug class;
- Bug fix in Error class to prevent memory overflow;
- Bug fix in cpf validation funcion of the Strings class;
- Bug fix in UUID class;
- Enhancements in Model;
- Function types into sample model User corrected;
- Configuration directory moved to project root;
- Created the var directory where system writes data during the course of its operation;
- Template cache directory moved to var/cache;
- Compiled template directory moved to var/compiled;
- Library directory moved to project root and renamed from library to springy;
- Application directory moved to project root and renamed from system to app;
- Vendor directory moved to project root;
- Kernel now has the responsability by find controller and start the application;
- Moved autoload and error handlers initiations to helper script;
- Migrator class moved to library directory;
- Migration scripts directory moved to project root;
- Starter script simplified;
- Removed support to HHVM.

## Version 3
### 3.6.3
- Added a method to remove a column from the conditions in DB\Condition class;
- Added support to configuration files in JSON format;
- Added support to save configuration files in JSON;
- Implemented a better control of the component files;
- Adjustment in the template of the debug;
- Adjustment into Controller lib class;
- Adjustment into Errors lib class;
- Bug fix in method to get remote IP when used inside a local area network;
- Bug fix into Securyti\AclManager lib class;
- Bug fix into Utils\Strings_UTF8's removeAccentedChars method;
- Ended support to PHP 5.5.

### 3.6.2
- Fixed bug in Model that reset the row pointer after a save when it has calculated columns.

### 3.6.1
- Enhancement in JSON class;
- Fixed bugs in Model class;
- Fixed bugs in Validator class;
- Fixed the "empty" IP when HTTP_X_FORWARDED_FOR header has "unknown" value;
- Fixed bugs in minify helper when using Minify class by Matthias Mullie;
- Documentation of URI class translated to English;
- Correction of the name of the method who load the user data by given array of conditions.

### 3.6.0
- New feature: default template directory;
- New feature: minifing asset files from source directory;
- New feature: category and transactional template support for SendGrid mailing driver;
- Correction in private network IP detection in Utils\Strings::getRealRemoteAddr();
- Adjustment in Model->update() method;
- Session configurations moved to 'system' configurations files;
- Session files configurations removed;
- Adjustments in errors templates;
- Bug fix in hook errors.

### 3.5.0
- New main configuration 'PROJECT_CODE_NAME' to set the project code name;
- New method Kernel::projectCodeName() to print the value of the project code name;
- New class Core\Debug;
- New class DB\Conditions;
- New class DB\Where;
- Adjustments in Errors class for Twig driver;
- Adjustments in Twig driver;
- Enhangements in Twig driver's assetFile() function;
- Enhancements in debug system;
- The Errors class now is dynamic;
- The method Errors::disregard() was moved to Kernel::addIgnoredError();
- The method Errors::regard() was moved to Kernel::delIgnoredError();
- The method Errors::setHook() was moved to Kernel::setErrorHook();
- The method Kernel::debug() was moved to Core\Debug::add();
- The method Kernel::debugPrint() was moved to Core\Debug::printOut();
- The method Kernel::getDebugContent() was moved to Core\Debug::get();
- The method Kernel::makeDebugBacktrace() was moved to Core\Debug::backtrace();
- The method Kernel::print_rc() was moved to Core\Debug::print_rc();
- Removed method Errors::ajax();
- Removed deprecated class Soap_Server;

### 3.4.0
- Framework batizado de Springy;
- Cria????o da classe Controller para constru????o de controllers;
- Elimina????o da classe Template_Static. Todas as chamadas aos m??todos da classe devem ser renomeados conforme abaixo:
    - chamadas a Template_Static::assignDefaultVar($name, $value) mudar para Kernel::assignTemplateVar($name, $value);
    - chamadas a Template_Static::getDefaultPlugins() mudar para Kernel::getTemplateFunctions();
    - chamadas a Template_Static::getDefaultVars() mudar para Kernel::getTemplateVar();
    - chamadas a Template_Static::getDefaultVar($name) mudar para Kernel::getTemplateVar($name);
    - chamadas a Template_Static::registerDefaultPlugin($type, $name, $callback, $cacheable = null, $cache_attrs = null) mudar para Kernel::registerTemplateFunction($type, $name, $callback, $cacheable = null, $cacheAttrs = null);
- Diret??rio para instala????o de classes de terceiros renomeado de "other" para "vendor", mas mantido dentro do diret??rio do sistema;
- Implementado recurso de controle de vers????o do banco de dados no pr??prio banco. Migration cria e controla sua pr??pria tabela para controle. Para rollback funcionar, agora os arquivos de script de rollback precisam ter mesmo nome do arquivos correspondente de migra????o;
- Adicionado m??todo Errors::setHook($error, $hook) para permitir hook em caso de erro.
    - $error pode ser o c??digo do erro ou 'default' para todos os erros;
    - $hook se refer ao nome de uma fun????o (string) ou m??todo de uma classe. Para o segundo caso, seu valor deve ser um array no formato [(object) objeto, (string) m??todo].

### 3.3.1
- Adicionado suporte a Swift Mailer;
- Encerramento de fun????es depreciadas;
- Remo????o das classes Browser;
- Adicionadas classes de teste para parte do framework (o trabalho est?? apenas come??ando);
- Ajustes de codifica????o para ficar em harmonia com PSR;
- Documenta????o em ingl??s (let's go translate and write everything needed).

### 3.3.0
- Corre????o de bug com sess??o vazia que ocorre em usu??rios do Safari no MacOS;
- Adi????o dos par??metros 'order', 'offset' e 'limit' em objetos embutidos na Model;
- Implementada configura????o system,system_error.reported_errors(array) com lista de c??digos de erro que devem ser reportados ao administrador do sistema;
- Implementado armazenamento das vari??veis de configura????o do sistema na Kernel;
- Implementada op????o de debug de template (somente para Smarty);
- Mudan??as estruturais no script de inicializa????o e helper;
- Mudan??a na forma como a Model trata a exist??ncia da coluna de controle de exclus??o l??gina em pesquisas;
- Implementados filtros por IS e IS NOT na Model;
- Nova classe de Mail e classes drivers para suporte a PHPMailer, SendGrid e MIME Message;
- Remo????o das classes RSS e FeedCreator;
- Remo????o das classes do Manuel Lemos;
- Melhorias no script p??s instala????o e atualiza????o para Composer:
    - Implementada op????o de minifica????o de arquivos;
    - Implementada op????o de desconsiderar nomes dos subdirat??rios durante a c??pia para agrupar todos os arquivos num ??nico local.

### 3.2.1
- Corre????o de bug no m??todo URI::makeSlug();
- Corre????o de bug do iconv() n??o funcionando no m??tido Strings_UTF8::removeAccentedChars();
- Melhorias em Strings_ANSI::removeAccentedChars().

### 3.2.0
- Tratamento da URL para eliminar caracteres especiais do espa??o (' ') ao arroba ('@') dos extremos (trim) da vari??vel $_SERVER['HTTP_HOST'];
- Corre????o de bug na Model quando ?? feito inclus??o de registro (INSERT) em tabela que chave prim??ria (PK) seja composta ou n??o seja um inteiro autoincremental;
- Corre????o de bug na Soap_Client que causava erro na aplica????o quando comunica????o com servidor falha;
- Corre????o de bug na classe Configuration que sobrescrevia entradas com m??ltiplos n??veis, apagando chaves existentes em default e n??o redeclaradas no ambiente;
- Implementa????o de defini????o do ambiente de configura????o atrav??s de vari??vel de ambiente (default = FWGV_ENVIRONMENT), que pode ser definida na entrada 'ENVIRONMENT_VARIABLE' em sysconf.php;
- Melhoria na classe Model para permitir editar e salvar qualquer dos registros do resultado de busca;
- Melhorias no processo de objetos embutidos (embeddedObj) da Model;
- Diversas melhorias no script cmd.php para execu????o da aplica????o em modo CLI:
    O cmd.php passa imprimir uma ajuda de sintaxe se nenhum par??metro for passado.
- Elimina????o do conceito CMS (remo????o da Classe, configura????es e arquivos relacionados);
- Implementa????o de filtro em classe Model embutida;
- Implementa????o de objeto embutido multi-n??vel;
- Implementa????o do sistema de controle de vers??o de banco de dados (migration).

### 3.1.3
- Corre????o de bug na classe Errors em modo CLI;
- Corre????o de bug na classe Mail quando modo de envio est?? indefinido.

### 3.1.2
- Inclus??o do conte??do da vari??vel m??gica do PHP $_SERVER nas mensages/templates de erro.

### 3.1.1
- Corre????o de bug na classe Soap_Client.

### 3.1.0
- Melhorias no script post-install.php;
- Adicionados m??todos de gatilho triggerBeforeDelete, triggerBeforeInsert, triggerBeforeUpdate, triggerAfterDelete, triggerAfterInsert e triggerAfterUpdate na classe Model para permitir gatilhos para tratamentos antes/depois de a????es de banco
- Corre????o de bug na Model quando h?? objetos embutidos e a consulta retorna zero linhas;
- Corre????o de bug no m??todo templateExists da Template;
- Corre????o de bug na classe Errors que ocorre quando o template de erro relacionado n??o existe;
- Melhorias no tratamento de HTTP_HOST para configura????o de ambiente pelo host;
- Cria????o da entrada de configura????o geral CONSIDER_PORT_NUMBER;
- Implementa????o de integra????o com SendGrid Web API na classe Mail para novo m??todo de envio 'sendgrid';
- Implementa????o de colunas calculadas na Model;
- Implementa????o de m??todo update para altera????o em massa na Model (experimental);
- Adicionados os m??todos disregar($error) e regard($error) na classe Errors. Esses m??todos tem por objetivo, respectivamente, adicionar e remover c??digos de erros da lista de ignorados pela classe. S??o ??teis para casos de utiliza????o de fun????es que causem a ocorr??ncia de um erro ou alerta em caso de falha, mas que n??o interfira no funcionamento da aplica????o;
- Adicionada classe UUID para gera????o de c??digos V3, V4, V5 e aleat??rio com base no microtime;
- Implementada prote????o contra ID de sess??o vazia ou contendo caracteres inv??lidos.

### 3.0.5
- Corre????o de bug no m??todo de auto descoberta do template, que causava inconsist??ncia no caminho de templates quando a classe era criada com e sem par??metros;
- Adi????o do m??todo having na classe Model. Este m??todo permite a utiliza????o da cl??usula SQL HAVING;
- Corre????o de bug no m??todo de montagem de back_trace do Kernel;
- Altera????o dos templates de exemplo para p??ginas index e de erros 404, 500 e 503 para utilizar Bootstrap e jQuery carregados dos respectivos CDNs;
- Criado script de p??s instala????o/atualiza????o para o Composer;
- Arquivo composer.json alterado para fazer download do Bootstrap e jQuery;
- Altera????o na URI para permitir altera????o do diret??rio root de controladora por configura????o de rotas;
- Ajustes no _Main devido a deprecia????o de configura????o de charset padr??o para biblioteca mbstring, no PHP 5.6;
- Criado m??todo clearChangedColumns na classe Model para permitir limpar a rela????o de colunas alteradas;
- Acrescentado m??todo Model->getPKColumns que retorna um array com as colunas PK;
- Corre????o de bug na classe Configuration;
- Corre????o de bug no m??todo Kernel::controllerNamespace;
- Altera????o na Errors para solu????o de problemas em sistemas que a fun????o php_uname() est?? desativada;
- Altera????o na URI para permitir a constru????o de URLs com caracteres em mai??sculas por causa de sistemas que o servidor web ?? sensitivo ao contexto;
- Implementa????o do atributo embeddedObj na Model, que recebe um array estruturado e permite embutir dados de outras classes mediante a liga????o de chaves estrangeiras;
- Adi????o do m??todo setEmbeddedObj na Model para permitir altera????o do atributo embeddedObj em tempo de execu????o.

### 3.0.4.1
- Corre????o de bug na classe de erro quando o destinat??rio das mensagens de erro de sistema ?? um array e n??o uma string;
- Cria????o da entrada de configura????o de email 'system_adm_mail' para o remetente de mensagens de erro do sistema.

### 3.0.4
- Cria????o do m??todo setColumns na classe Model para permitir altera????o das colunas a serem listadas pelo m??todo query;
- Cria????o do m??todo groupBy na classe Model para permitir agrupamentos em consultas pelo m??todo query;
- Inclus??o do caracter sharp (#) na rela????o de aceitos para montagem de URL em URI::buildURL();
- Adi????o de entradas de configura????o para armazenamento de logs de erro do sistema em banco de dados;
- Adi????o da possibilidade de cria????o da tabela de log de erros do sistema caso nao exista;
- Inclus??o de template de mensagem de erros do sistema (error_template.html);
- Inclus??o de template para email com mensagem de erros do sistema (error_email_template.html);
- Melhorias na tela de listagem do log de erros armazenado em banco de dados.

### 3.0.3
- Cria????o da entrada de configura????es template.errors para definir nome dos templates das p??ginas de erros (404, 500, 503, etc.);
- Cria????o da URI m??gica para teste das p??ginas de erro. Para us??-la, chame a p??gina /_error_/{codigo do erro};
- Remo????o das vari??veis de template urlJS, urlCSS, urlIMG e urlSWF do m??todo Errors::printHtml().

### 3.0.2
- Cria????o da entrada de configura????o do sistema para diret??rio assets;
- Cria????o da entrada de configura????o em templates strict_variables que quando verdadeiro faz classe de templates ignorar vari??veis inv??lidas e/ou indefinidas;
- Cria????o da entrada de configura????o em uri 'assets_dir' para defini????o do diret??rio de assets;
- Templates utilizando engine Smarty passam a ter dispon??vel o m??todo assetFile que versiona arquivos est??ticos para evitar desatualiza????o pelo cache do navegador do usu??rio;
- Altera????o da classe DB para reportar erros por padr??o;
- Altera????o da classe Errors para n??o tratar erros de template (html);
- Altera????o da posi????o do bloco de debug dentro do HTML;
- Outros ajustes.

### 3.0.1
- Abandonado suporte ao NuSOAP (http://sourceforge.net/projects/nusoap/);
- Classe Template transformada em um container da classe de template;
- Inclus??o de suporte ?? classe de templates Twig (http://twig.sensiolabs.org/);
- Adicionado suporte ao Composer;
- Classe Smarty removida da distribui????o do framework;
- Inclus??o da classe File\File - para manipula????o de arquivos do sistema de arquivos;
- Inclus??o da classe File\UploadedFile - para manipula????o de arquivos que foram criados por upload no sistema de arquivos;
- Exclus??o da classe Consultar;
- Melhorias e corre????es de bug na classe Model;
- Melhoria nos m??todos buildURL e makeSlug da classe URI para permitir URLs com '.', ',' e outros caracteres;
- Deminifica????o do HTML e JavaScript embutido para impress??o de debug da classe Kernel;
- Corre????es do JavaScript para bind de Ajax do debug.

### 3.0.0
- Inclus??o da classe Container\DIContainer - Classe de container para invers??o de controle (Dependecy Injection);
- Inclus??o da classe Core\Application - Classe container de depend??ncias de toda aplica????o;
- Inclus??o da classe Core\Input - Classe para gerenciamento de dados de input de usu??rio (GET e POST);
- Inclus??o da classe Events\HandlerInterface - Interface para classes handlers de eventos;
- Inclus??o da classe Events\Mediator - Classe de intermediadora de administra????o de eventos;
- Inclus??o da classe Security\AclManager - Classe para gerenciamento de permiss??es de identidades autenticadas na aplica????o;
- Inclus??o da classe Security\AclUserInterface - Interface para padronizar as identidades que ser??o permissionadas na aplica????o;
- Inclus??o da classe Security\AuthDriverInterface - Interface para padronizar os drivers de autentica????o de identidades;
- Inclus??o da classe Security\Authentication - Gerenciador de autentica????o de identidades;
- Inclus??o da classe Security\BasicHasher - Classe pa gera????o b??sica de hashes;
- Inclus??o da classe Security\BCryptHasher - Classe pa gera????o de hashes via BCrypt;
- Inclus??o da classe Security\DBAuthDriver - Driver de autentica????o que utiliza o banco de dados como storage;
- Inclus??o da classe Security\HasherInterface - Interface para padronizar os geradores de hashes;
- Inclus??o da classe Security\IdentityInterface - Interface para representar identidades que ter??o uma sess??o na aplica????o;
- Inclus??o da classe Utils\FlashMessagesManager - Classe que gerenciar dados flash de sess??o, ou seja, dados que ficam dispon??veis por somente um request;
- Inclus??o da classe Utils\MessageContainer - Classe container de mensagens de texto;
- Inclus??o da classe Validation\Validator - Validador de dados de input do usu??rio;
- Inclus??o do Arquivo de helpers com fun????es e constantes para deixar o desenvolvedor mais feliz e produtivo;
- Altera????o na vari??vel de configura????o global 'SYSTEM' para possibilitar desenvolvimento de teste integrado;
- Criado tratamento para ignorar avisos (warnings) de fun????es depreciadas (deprecated).

## Version 2
### 2.2.1
- Script da controladora Default renomeado para _default.php;
- Elimina????o da classe FILO;
- Implementa????o de sobrescri????o de configura????o para hosts espec??ficos;
- Classes ArrayUtils, JSON, JSON_Static, Rss, Strings, Strings_ANSI e Strings_UTF8 movidas para dentro de Utils;
- Padroniza????o do estilo de c??digo conforme o PHP Framework Interop Group <http://www.php-fig.org/>.

### 2.2.0
- Implementado recurso de leitura de dados de configura????es utilizando sistema de sub-n??veis separados por ponto. Ex: Configuration::get('db.round_robin.type') - Colabora????o de Allan Marques;
- Inclus??o da classe de manipula????o de arrays - ArrayUtils - Colabora????o de Allan Marques;
- Altera????o da mensagem do handler de erro quando o sistema ?? executado em modo cli.

### 2.1.2
- Implementado recurso de armazenamento dos templates compilados e cache dos templates em subdiret??rio para melhoria de performance em caso de grande quantidade de arquivos que causam lentid??o no sistema operacional.

### 2.1.1
- Corre????o de bug na lib FW\DB.

### 2.1.0
- Adicionado recurso de cache de consultas de banco em memcached.

### 2.0.0
- Cria????o do namespace FW.

## Version 1
### 1.4.0
- Cria????o da classe Configuration;
- Removidos m??todos de configura????o do sistema do Kernel;
- Normaliza????o do nome dos m??todos das bibliotecas para o padr??o lowerCamelCase http://pt.wikipedia.org/wiki/CamelCase (veja o documento de migra????o "migrando para vers??o 1.4.txt");
- Unifica????o de m??todos de leitura e escrita num m??todo misto;
- Melhorias na documenta????o;
- Melhorias de consist??ncia e corre????es de bugs.

### 1.3.16
- Inclus??o da biblioteca Model, para constru????o de modelos de acesso a banco;
- Inclus??o do framework de frontend Bootstrap;
- Melhorias e documenta????o dos arquivos de configura????o.

### 1.3.15
- Ajustes para trabalhar com jQuery.

### 1.3.14
- Atualiza????o do Smarty.

### 1.3.13
- Inclus??o do front-end Bootstrap.

### 1.3.12
- Diret??rio scripts renomeado para apenas 'js'.

### 1.3.11
- Migra????o para o framework Javascript jQuery e deprecia????o do framework Javascript Prototype.

### 1.3.9
- Deprecia????o da adoDB.

### 1.3.0 to 1.3.8
- Altera????o da classe DB para usar PDO;
- Other history is lost forever (sorry).

### 1.2.9
- Implementa????o do recurso de vari??veis padr??o em templates;
- Inclus??o da configura????o 'PROJECT_VERSION' no sistema (sysconf.php);
- Inclus??o do m??todo validate_uri na biblioteca URI;
- Corre????o de bug no m??todo make_debug_backtrace da biblioteca Kernel;
- Corre????o de bug no m??todo parse_uri da biblioteca URI;
- Atualiza????o da classe MimeMessage.

### 1.2.8
- Implementa????o do recurso de redirecionamento e redirada de URL terminado em / para evitar duplicidade de conte??do para SEO;
- Inclus??o do m??todo add_attach na biblioteca Mail;
- Melhoria no m??todo mobile_device_detect da biblioteca Kernel;
- Corre????o de bug na biblioteca Pagination;
- Corre????o de bug na biblioteca Mail;
- Outras pequenas melhorias e corre????es de bug.

### 1.2.7
- Implementa????o do recurso de ter um host carregando as controladoras a partir de um subdiret??rio;
- Inclus??o do recurso de anexos na biblioteca Mail.php.

### 1.2.6.19
- Corrigido bug do redirecionamento 302 do m??todo redirect da biblioteca URI.

### 1.2.6.18
- Adicionado controle sobre o header HTTP/1.0 Cache-Control;
- Corrigido valida????o feita pelo m??todo data da biblioteca Strings.

### 1.2.5
- Adicionado mecanismo de acesso restrito por ambiente, configur??vel na 'system'.

### 1.2.4
- Melhorias no m??todo "copyright" do framework.

### 1.2.3
- Inclus??o da biblioteca SOAP_Client;
- In??cio do desenvolvimento da biblioteca SOAP_Server;
- Implementa????o de possibilidade de sess??o em banco de dados e Memcached.

### 1.2.2
- Melhorias nos m??todos de debug.

### 1.2.1c
- Modificada a forma de armazenamento interno das vari??veis default de template;
- Adicionado m??todo assign_default_var() ?? biblioteca Template para adi????o de vari??veis de template;
- Adicionado m??todo get_default_var() ?? biblioteca Template para pegar valores de vari??veis de template.

### 1.2.1b
- Classe NuSOAP atualizada para a vers??o 0.9.5.

### 1.2.1
- Adicionado uri /_pi_ que mostra as configura????es do PHP - phpinfo();
- Corre????es no sistema de debug;
- Melhorias na biblioteca Pagination.

### 1.2.0c
- Removida tag de fechamento de c??digo PHP de todas as classes da biblioteca, index e configura????es.

### 1.2.0b
- Removida tag de fechamento de c??digo PHP de algumas das classes da biblioteca.

### 1.2.0
- Adicionada classe para cria????o de arquivos Excel;
- Atualiza????o da Smarty para a vers??o 3;
- Atualiza????o da biblioteca Template para a vers??o 3 da Smarty;
- Adicionada fun????o para vefiricar se string est?? codificada como UTF-8 na biblioteca Strings;
- Substitu??da utiliza????o da fun????o mb_ereg_replate por preg_replace nas subclasses Strings_UTF8 e Strings_ANSI.

### 1.1.0
- Adicionado m??todo de cr??ditos do framework;
- Melhorias no sistema de debug;
- M??todo de busca da controller movido da index.php para o URI::parse_uri;
- Implementado conceito de configura????o default;
- Implementado sistema de rotas alternativas para controllers.

### 1.0.1.5
- Classe MimeMessage atualizada.

### 1.0.1.4
- Inclus??o da configura????o de timezone.

### 1.0.1.3
- Inclus??o das seguintes constantes de template:
    - $HOST - string com a URL do host
    - $CURRENT_PAGE_URI - string com a URI da p??gina atual

### 1.0.1.2
- Inclus??o da biblioteca Javascript jQuery v1.4.2 <http://jquery.com/> no pacote do framework;
- Componente TinyMCE editor atualizado para a vers??o 3.3.8.

### 1.0.1
- Atualizadas as classes Smarty e ADODB;
- Diret??rio system movido para dentro de www por padr??o.

### 1.0.0
- Vers??o inicial do framework confeccionada por Fernando Val com aux??lio de Lucas Cardozo