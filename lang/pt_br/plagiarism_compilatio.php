<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'plagiarism_compilatio', language 'pt_br', version '4.5'.
 *
 * @package     plagiarism_compilatio
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activate_compilatio'] = 'Habilitar Compilatio';
$string['activate_submissiondraft'] = 'Para que os estudantes possam analisar seus rascunhos, você deve habilitar a opção <b>{$a}</b> na seção';
$string['admin_disabled_reports'] = 'O administrador não permite que os professores exibam os relatórios de similaridade com os estudantes.';
$string['admin_goto_helpcenter'] = 'Acesse o Centro de Ajuda Compilatio para ver os artigos relacionados à administração do plugin Moodle.';
$string['analysis_date'] = 'Data da análise (Somente análise programada)';
$string['analysis_started'] = '{$a} foi solicitada uma análise.';
$string['analysistype_manual'] = 'Manual';
$string['analysistype_prog'] = 'Agendada';
$string['api_key_not_tested'] = 'Sua chave API não foi verificada porque a conexão ao Compilatio falhou.';
$string['api_key_not_valid'] = 'Sua chave API não é válida. Ela é específica para a plataforma utilizada. Você pode obtê-la contatando <a href=\'mailto:ent@compilatio.net\'>ent@compilatio.net</a>.';
$string['api_key_valid'] = 'Sua chave API é válida.';
$string['auto_diagnosis_title'] = 'Auto-diagnóstico';
$string['average'] = 'Taxa média';
$string['compilatio'] = 'Compilatio plagiarism plugin';
$string['compilatio:enable'] = 'Permitir que o professor habilite/desabilite o Compilatio dentro de uma atividade';
$string['compilatio:triggeranalysis'] = 'Permitir que o professor acione manualmente a análise';
$string['compilatio:viewreport'] = 'Permitir que o professor veja o relatório completo do Compilatio';
$string['compilatio_help_assign'] = 'Mostrar ajuda sobre o plugin Compilatio';
$string['compilatio_iddocument'] = 'Identificar documento';
$string['compilatio_search'] = 'Busca';
$string['compilatio_search_help'] = 'Você pode encontrar o autor de um documento recuperando o identificador do documento a partir das fontes do relatório de análise. Exemplo: 1. seu documento: <b>1st5xfj2</b> - Atribuir_Nome(30)Nome_Copiado_Documento.odt.';
$string['compilatio_search_notfound'] = 'Nenhum documento foi encontrado para este identificador entre os documentos carregados em sua plataforma Moodle.';
$string['compilatio_search_tab'] = 'Encontre o autor de um documento.';
$string['compilatiodefaults'] = 'Padrões de Compilatio';
$string['compilatioexplain'] = 'Para mais informações sobre este plugin, veja: <href="http://www.compilatio.net/en/" target="_blank">compilatio.net</a>';
$string['cron_check'] = 'O CRON foi executado em {$a} pela última vez.';
$string['cron_check_never_called'] = 'O CRON nunca foi executado desde a ativação do plugin. Ele pode estar mal configurado em seu servidor.';
$string['cron_check_not_ok'] = 'Não foi executado na última hora.';
$string['cron_frequency'] = 'Parece ser executado a cada {$a} minuto.';
$string['cron_recommandation'] = 'Recomendamos utilizar um atraso inferior a 15 minutos entre cada execução do CRON.';
$string['defaults_desc'] = 'As seguintes configurações são os padrões definidos ao habilitar o Compilatio dentro de um Módulo de Atividade';
$string['defaultupdated'] = 'Valores padrão atualizados';
$string['disclaimer_data'] = 'Ao habilitar a Compilatio, você aceita o fato de que os dados sobre sua configuração Moodle serão coletados a fim de melhorar o suporte e a manutenção deste serviço.';
$string['display_notifications'] = 'Exibir notificações';
$string['display_stats'] = 'Mostrar estatísticas sobre esta atividade';
$string['documents_number'] = 'Documentos analisados';
$string['enable_mod_assign'] = 'Habilitar Compilatio para Tarefas';
$string['enable_mod_forum'] = 'Habilitar Compilatio para Forums';
$string['enable_mod_quiz'] = 'Habilitar Compilatio para Quiz';
$string['enable_mod_workshop'] = 'Habilitar Compilatio para Workshops';
$string['enabledandworking'] = 'O plugin Compilatio está habilitado e funcionando.';
$string['errors'] = 'Erros :';
$string['export_csv'] = 'Exportar dados sobre esta atividade para um arquivo CSV';
$string['export_global_csv'] = 'Clique aqui para exportar estes dados em formato CSV';
$string['export_raw_csv'] = 'Clique aqui para exportar dados brutos em formato CSV';
$string['failedanalysis'] = 'A Compilatio não analisou seu documento:';
$string['filename'] = 'Nome do arquivo';
$string['firstname'] = 'Primeiro nome';
$string['get_scores'] = 'Recuperar pontuações de plágio da Compilatio';
$string['global_statistics'] = 'Estatísticas globais';
$string['global_statistics_description'] = 'Todos os dados dos documentos são enviados à Compilatio.';
$string['goto_compilatio_service_status'] = 'Veja o status dos serviços Compilatio.';
$string['green_threshold'] = 'Verde até';
$string['help_compilatio_format_content'] = 'Compilatio trata da maioria dos formatos utilizados em processadores de texto e na Internet.
Os seguintes formatos são suportados :';
$string['helpcenter'] = 'Acesse o Centro de Ajuda Compilatio para o uso do plugin Compilatio no Moodle.';
$string['helpcenter_error'] = 'Não podemos conectá-lo automaticamente ao centro de ajuda. Por favor, tente novamente mais tarde ou vá diretamente para lá usando o seguinte link :';
$string['immediately'] = 'Imediatamente';
$string['indexed_document'] = 'Documento adicionado ao banco de dados de documentos de sua instituição. Seu conteúdo pode ser usado para detectar semelhanças com outros documentos.';
$string['lastname'] = 'Sobrenome';
$string['manual_analysis'] = 'A análise deste documento deve ser acionada manualmente.';
$string['maximum'] = 'Taxa máxima';
$string['minimum'] = 'Taxa mínima';
$string['no_document_available_for_analysis'] = 'Nenhum documento estava disponível para análise';
$string['no_statistics_yet'] = 'Nenhum documento foi analisado ainda.';
$string['not_analyzed'] = 'Os seguintes documentos não podem ser analisados :';
$string['not_indexed_document'] = 'Documento não adicionado ao banco de dados de documentos de sua instituição. Seu conteúdo não será usado para detectar semelhanças com outros documentos.';
$string['numeric_threshold'] = 'Limite deve ser um número.';
$string['orange_threshold'] = 'Laranja até';
$string['owner_file'] = 'GDPR e propriedade de documentos';
$string['owner_file_school'] = 'A escola é proprietária dos documentos';
$string['owner_file_school_details'] = 'Quando um estudante solicita a exclusão de todos os seus dados, os documentos e relatórios serão armazenados e estarão disponíveis para futura comparação com outros documentos. No final do contrato com a Compilatio, todos os dados pessoais de sua escola, incluindo documentos analisados, são apagados dentro dos prazos contratuais.';
$string['owner_file_student'] = 'O estudante é o único proprietário de seu documento';
$string['owner_file_student_details'] = 'Quando um estudante solicita a exclusão de todos os seus dados, seus documentos e relatórios serão excluídos do Moodle e do banco de dados de documentos Compilatio. Os documentos não estarão mais disponíveis para comparação com outros documentos.';
$string['plugin_disabled'] = 'O plugin não está habilitado na plataforma Moodle.';
$string['plugin_disabled_assign'] = 'O plugin não está habilitado para Tarefas.';
$string['plugin_disabled_forum'] = 'O plugin não está habilitado para Fóruns';
$string['plugin_disabled_quiz'] = 'O plugin não está habilitado para Questionário.';
$string['plugin_disabled_workshop'] = 'O plugin não está habilitado para Laboratórios de Avaliação.';
$string['plugin_enabled'] = 'O plugin é habilitado na plataforma Moodle.';
$string['plugin_enabled_assign'] = 'O plugin está habilitado para Tarefas.';
$string['plugin_enabled_forum'] = 'O plugin está habilitado para Fóruns.';
$string['plugin_enabled_quiz'] = 'O plugin está habilitado para Questionário.';
$string['plugin_enabled_workshop'] = 'O plugin está habilitado para Laboratórios de Avaliação.';
$string['pluginname'] = 'Compilatio plagiarism plugin';
$string['privacy:metadata:core_files'] = 'Arquivos anexados aos envios ou criados a partir de envios de texto on-line';
$string['privacy:metadata:core_plagiarism'] = 'Este plugin é chamado pelo subsistema de plágio do Moodle';
$string['privacy:metadata:external_compilatio_document'] = 'Informações sobre os documentos no banco de dados Compilatio';
$string['privacy:metadata:external_compilatio_document:filename'] = 'O nome do envio';
$string['privacy:metadata:plagiarism_compilatio_files'] = 'Informações sobre os envios carregados';
$string['privacy:metadata:plagiarism_compilatio_files:filename'] = 'O nome do envio (eventualmente auto-gerada)';
$string['privacy:metadata:plagiarism_compilatio_files:userid'] = 'O ID do usuário Moodle que fez o envio';
$string['programmed_analysis_future'] = 'Os documentos serão analisados pela Compilatio em {$a}.';
$string['programmed_analysis_past'] = 'Os documentos foram enviados para análise à Compilatio em {$a}.';
$string['progress'] = 'Progresso :';
$string['quiz_help'] = 'Somente serão analisadas as questões de Dissertação cuja resposta contenha pelo menos {$a} palavras.';
$string['red_threshold'] = 'vermelho de outra forma';
$string['results'] = 'Resultados:';
$string['saved_config_failed'] = '<strong>A combinação chave de API e o endereço digitado é inválida. Compilatio está desativado, por favor tente novamente.<br/>
								A página <a href="autodiagnosis.php">auto diagnóstico</a> pode ajudá-lo a configurar este plugin.</strong><br/>
								Erro :';
$string['showwhenclosed'] = 'Quando a atividade foi encerrada';
$string['similarities'] = 'Semelhanças';
$string['similarities_disclaimer'] = 'Você pode analisar as semelhanças nos documentos desta atividade com <a href=\'http://www.compilatio.net/en/\' target=\'_blank\'>Compilatio</a>.<br/>Cuidado: as semelhanças medidas durante a análise não significam necessariamente plágio. O relatório de análise ajuda a identificar se as semelhanças correspondem a uma citação adequada ou a um plágio.';
$string['similarity_percent'] = '% de semelhanças';
$string['start_analysis_in_progress'] = 'Lançamento das análises em andamento';
$string['stats_errors'] = 'Erros';
$string['student_help'] = 'Você pode analisar seu esboço com o Compilatio Magister, para medir as semelhanças no texto de seus arquivos.<br/>
O conteúdo de seu esboço não será utilizado pela Compilatio como material de comparação para análises futuras.<br/>
Seu professor, entretanto, terá acesso a este relatório de análise.';
$string['studentdisclosuredefault'] = 'Todos os arquivos carregados aqui serão enviados ao serviço de detecção de semelhanças Compilatio';
$string['students_disclosure'] = 'Divulgação ao estudante';
$string['students_disclosure_help'] = 'Este texto será exibido para todos os estudantes na página de carregamento de arquivos.';
$string['tabs_title_help'] = 'Ajuda';
$string['tabs_title_stats'] = 'Estatísticas';
$string['teacher'] = 'Professor';
$string['thresholds_description'] = 'Indique o limite que você deseja utilizar, a fim de facilitar a busca do relatório de análise (% de semelhanças) :';
$string['thresholds_settings'] = 'Limites :';
$string['timesubmitted'] = 'Submetido à Compilatio em';
$string['update_meta'] = 'Executar as operações programadas da Compilatio';
$string['webservice_not_ok'] = 'O servidor não foi capaz de se conectar ao serviço web. Seu firewall pode estar bloqueando a conexão.';
$string['webservice_ok'] = 'O servidor é capaz de se conectar com o serviço web.';
