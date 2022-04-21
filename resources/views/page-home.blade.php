<div class="flex flex-col items-center justify-between h-screen bg-black bg-[url('http://localhost:9696/www/disolucoes/wp-content/uploads/2022/04/fundo-hero.jpg')] bg-center bg-no-repeat bg-cover bg"
    id="bg-hero">
    <header class="container flex items-center justify-between">
        <img src="@asset('/images/logo_di_branca.png')" alt="">
        <div class="space-x-4 text-[2rem] text-white">
            <ion-icon name="logo-instagram"></ion-icon>
            <ion-icon name="logo-youtube"></ion-icon>
            <ion-icon name="logo-facebook"></ion-icon>
        </div>
    </header>
    <div class="hidden sm:flex"></div>
    <div class="container flex flex-col items-center justify-center pb-8 space-y-4">
        <h2 class="text-[2rem] font-bold text-center text-white sm:w-8/12 lg:w-6/12">
            Nós queremos que sua empresa tenha <span class="text-rose-500">melhores resultados</span>
        </h2>

        <p class="leading-normal text-center text-white sm:w-8/12 lg:w-6/12">
            Através do nosso Sistema de Gestão você terá uma melhor visualização do
            seu negócio, informações precisas e reais, otimização do tempo, mais
            segurança nas tomadas de decisões e um melhor controle de
            informações.
        </p>
        <button class="px-8 py-4 text-base font-medium text-black bg-green-400 rounded hover:brightness-125">
            Quero um Sistema de Gestão para minha empresa!
        </button>
    </div>

    <div class="hidden sm:flex"></div>
</div>
<section class="">
    <div class="container py-[4.5rem]">
        <div class="flex flex-col items-center pb-8 md:flex-row">
            <div class="flex flex-col space-y-4 sm:w-10/12 md:w-5/12">
                <p class="text-rose-400 text-medium sm:text-center md:text-left">Por que a sua empresa precisa do nosso
                    Sistema de Gestão?</p>
                <h2 class="text-[2rem] text-white font-semibold sm:text-center md:text-left">Porque ele oferece o
                    controle que sua empresa precisa!</h2>
                <p class="leading-normal text-white sm:text-center md:text-left">Com a utilização do sistema, sua
                    empresa passa a ter mais informações,
                    e, com
                    isso, mais controle sobre tudo o que está administrando.
                </p>
            </div>
            <div
                class="w-[1px] h-8 mx-auto bg-gradient-to-t from-white to-black md:bg-gradient-to-l md:w-2/12 md:h-[1px]">
            </div>
            <div class="p-[1px] relative bg-gradient-to-b from-white to-black md:w-5/12 md:bg-gradient-to-r ">
                <div class="p-4 bg-black md:py-[4rem] md:pl-[2.5rem]">
                    <ul x-data="{
                        items: [
                            'Controle Financeiro',
                            'Controle de Estoque',
                            'Controle de Vendas',
                            'Controle Fiscal',
                            'Relatórios de Lucratividade',
                            'Relatórios Contábeis e Fiscais',
                            'Integração com Diversas Plataformas'
                        ]
                    }">
                        <template x-for="(item, index) in items">
                            <li class="flex items-center gap-2 text-white">
                                <ion-icon class="text-base text-rose-400" name="checkmark-circle-outline"></ion-icon>
                                <span x-text="item"></span>
                            </li>
                        </template>
                    </ul>
                </div>
            </div>
        </div>
        <div class="">
            <p class="text-center text-white">Além de proporcionar uma maior segurança de informações.</p>
        </div>
    </div>
</section>
<div class="container flex">
    <div class="w-6/12 h-[1px] bg-gradient-to-r from-black to-white"></div>
    <div class="w-6/12 h-[1px] bg-gradient-to-r from-white to-black"></div>
</div>
<section class="bg-black">
    <div class="container flex flex-col gap-4 py-[4.5rem] items-center justify-center">
        <h2 class="text-white text-[2rem] font-semibold text-center lg:w-8/12">
            Tenha resultados notáveis após a implementação do nosso sistema!
        </h2>
        <div class="grid w-full grid-cols-1 my-4 gap-x-4 gap-y-4 sm:grid-cols-2 md:grid-cols-3" x-data="{
            segmentos: [
                { title: 'Atacado', url: '@asset('
                    images / atacado.svg ')' },
                { title: 'Distribuidora', url: '@asset('
                    images / distribuidora.svg ')' },
                { title: 'Varejo', url: '@asset('
                    images / varejo.svg ')' },
                { title: 'Comércio em Geral', url: '@asset('
                    images / comercio - geral.svg ')' },
                { title: 'Bares e Restaurantes', url: '@asset('
                    images / bares - restaurantes.svg ')' },
                { title: 'Prestadores de Serviços', url: '@asset('
                    images / prestadores - servicos.svg ')' }
            ]
        }">
            <template x-for="(segmento, index) in segmentos">
                <div
                    class="flex items-center justify-center col-span-1 gap-4 py-4 border border-transparent rounded-lg bg-rose-400/10 hover:border-rose-400">
                    <img :src="segmento.url" alt="" srcset="">
                    <span class="text-white" x-text="segmento.title"></span>
                </div>
            </template>
        </div>
        <p class="text-center text-white">
            É um sistema completo que pode ser utilizado em diversos segmentos!
        </p>
        <button class="px-8 py-4 text-base font-medium text-black bg-green-400 rounded hover:brightness-125">
            Quero um Sistema de Gestão para minha empresa!
        </button>
    </div>
</section>
<div class="container flex">
    <div class="w-6/12 h-[1px] bg-gradient-to-r from-black to-white"></div>
    <div class="w-6/12 h-[1px] bg-gradient-to-r from-white to-black"></div>
</div>
<section class="py-[4.5rem]">
    <div class="container flex flex-col items-center gap-8 md:gap-6 md:flex-row">
        <img src="@asset('images/porte-empresa.png')" alt="" class="md:w-6/12">
        <div class="flex flex-col gap-4 md:w-6/12">
            <p class="text-rose-400 text-medium sm:text-center md:text-left">Está começando agora e ainda não tem
                processos bem definidos?</p>
            <h2 class="text-[2rem] text-white font-semibold sm:text-center md:text-left">Temos versões que se adaptam em
                cada momento de sua empresa.</h2>
            <p class="leading-normal text-white sm:text-center md:text-left">Nós queremos te ajudar a crescer e atingir
                novos patamares, para isso, você precisa de organização, processos bem definidos e ferramentas que
                facilitem o gerenciamento da sua empresa.
            </p>
        </div>
    </div>
</section>
<div class="container flex">
    <div class="w-6/12 h-[1px] bg-gradient-to-r from-black to-white"></div>
    <div class="w-6/12 h-[1px] bg-gradient-to-r from-white to-black"></div>
</div>
<section class="py-[4.5rem]">
    <div class="container flex flex-col items-center gap-4 md:flex-row">
        <div class="flex flex-col gap-4 md:w-6/12">
            <p class="leading-normal text-white sm:text-center md:text-left">
                Se sua empresa sofre com falta de <span class="text-rose-400">controle financeiro, de estoque e de
                    relatórios, falta de automação dos processos rotineiros</span>, gerando um retrabalho de cadastros
                em geral, trabalhos manuais demorados e repetitivos, que aumentam muitas vezes a demanda de mão de obra
                de pessoas internamente…
            </p>
            <p class="leading-normal text-white sm:text-center md:text-left">
                Então chegou a hora de você dar um passo rumo a melhores resultados!
            </p>
        </div>
        <img class="md:w-6/12" src="@asset('images/dores-empresario.png')" alt="">
    </div>
</section>
<div class="container flex">
    <div class="w-6/12 h-[1px] bg-gradient-to-r from-black to-white"></div>
    <div class="w-6/12 h-[1px] bg-gradient-to-r from-white to-black"></div>
</div>
<section class="py-[4.5rem]">
    <div class="container flex flex-col items-center gap-8 md:flex-row md:gap-6">
        <img src="@asset('images/homem-feliz.png')" alt="" srcset="" class="md:w-6/12">
        <div class="flex flex-col items-center gap-4 md:items-start">
            <h2 class="text-[2rem] text-white font-semibold sm:text-center md:text-left">
                Ao investir em nosso Sistema ERP, você terá acesso a um sistema:
            </h2>
            <ul x-data="{
                motivos: [
                    'De fácil usabilidade;',
                    'Integrado com as principais plataformas de vendas digitais: Woocommerce, Mercado Livre, Tray, Magento e Madeira Madeira;',
                    'Destinado a diversos segmentos do mercado;',
                    'Atualizado de forma constante, seguindo as regras fiscais e tributárias vigentes;',
                    'Com excelentes relatórios para melhor análise do negócio.'
                ]
            }">
                <template x-for="(motivo, index) in motivos">
                    <li class="flex flex-row items-center space-x-2 text-white flex-nowrap">
                        <div class="w-4">
                            <ion-icon class="text-base text-rose-400" name="checkmark-circle-outline"></ion-icon>
                        </div>
                        <span x-text="motivo"></span>
                    </li>
                </template>
            </ul>
            <button class="px-8 py-4 text-base font-medium text-black bg-green-400 rounded hover:brightness-125">
                Quero um Sistema de Gestão para minha empresa!
            </button>
        </div>
    </div>
</section>
<div class="container flex">
    <div class="w-6/12 h-[1px] bg-gradient-to-r from-black to-white"></div>
    <div class="w-6/12 h-[1px] bg-gradient-to-r from-white to-black"></div>
</div>
<section class="py-[4.5rem]">
    <div class="container flex flex-col items-center gap-8">
        <div class="space-y-4">
            <h2 class="text-[2rem] text-white font-semibold text-center">Como funciona nosso sistema? </h2>
            <p class="text-center text-rose-400 text-medium">Conheça por dentro!</p>
        </div>
        <iframe class="sm:hidden" width="328" height="184" src="https://www.youtube.com/embed/uR5nb48hJa4">
        </iframe>
        <iframe class="hidden sm:block md:hidden" width="736" height="414"
            src="https://www.youtube.com/embed/uR5nb48hJa4">
        </iframe>
        <iframe class="hidden md:block" width="960" height="540" src="https://www.youtube.com/embed/uR5nb48hJa4">
        </iframe>
    </div>
</section>
<div class="container flex">
    <div class="w-6/12 h-[1px] bg-gradient-to-r from-black to-white"></div>
    <div class="w-6/12 h-[1px] bg-gradient-to-r from-white to-black"></div>
</div>
<section class="py-[4.5rem]">
    <div class="container flex flex-col items-center gap-8 md:flex-row md:gap-6">
        <div class="flex flex-col items-start gap-4 md:w-6/12 sm:items-center md:items-start">
            <h2 class="text-white text-[2rem] sm:text-center md:text-left">
                Está com problemas no sistema?
            </h2>
            <p class="text-white sm:text-center md:text-left">
                Nós temos uma equipe preparada para resolver qualquer problema que possa acontecer, mesmo que esteja
                fora do horário comercial, com uma equipe de plantão até às 22 horas.
            </p>
            <p class="text-white sm:text-center md:text-left">
                Faremos o possível para ouvir todas as suas demandas e necessidades,
                para resolvê-las da melhor forma possível!
            </p>
            <button class="px-8 py-4 text-base font-medium text-black bg-green-400 rounded hover:brightness-125">
                Quero falar com um atendente!
            </button>
        </div>
        <img src="@asset('images/suporte.png')" alt="" class="md:w-6/12">
    </div>
</section>
<div class="container flex">
    <div class="w-6/12 h-[1px] bg-gradient-to-r from-black to-white"></div>
    <div class="w-6/12 h-[1px] bg-gradient-to-r from-white to-black"></div>
</div>
<section class="py-[4.5rem]">
    <div class="container flex flex-col items-center gap-4">
        <p class="w-8/12 leading-normal text-center text-white">
            Ao implantar o nosso sistema de gestão, seu negócio vai ter uma melhor performance, controles mais completos e rápidos, um fácil acesso a relatórios, fichas técnicas e cadastros, e uma melhor qualidade das informações em poucos cliques.
        </p>
        <p class="w-8/12 text-[2rem] text-rose-400 font-semibold text-center">
            O que você está esperando?
        </p>
        <p class="w-8/12 leading-normal text-center text-white">
            Sua empresa merece uma melhor gestão para gerar grandes resultados!
        </p>
        <button class="px-8 py-4 text-base font-medium text-black bg-green-400 rounded hover:brightness-125">
            Quero um Sistema de Gestão para minha empresa!
        </button>
    </div>
</section>
<div class="container flex">
    <div class="w-6/12 h-[1px] bg-gradient-to-r from-black to-white"></div>
    <div class="w-6/12 h-[1px] bg-gradient-to-r from-white to-black"></div>
</div>
<section class="py-[4.5rem]">
    <div class="container flex flex-col items-center gap-8 md:flex-row md:gap-6">
        <div class="flex flex-col items-center gap-4 md:items-start">
            <h2 class="text-[2rem] text-white font-semibold sm:text-center md:text-left">
                Conheça as funcionalidades do Sistema:
            </h2>
            <ul x-data="{
                funcionalidades: [
                    'Diminuição de imposto com os produtos monofásicos relacionados ao sistema;',
                    'Obtenção de uma relação sugestiva do sistema de produtos que precisam ser comprados com maior frequência;',
                    'Informação dos produtos mais vendidos e horários de maior movimento de seu estabelecimento;',
                    'Maior clareza no fluxo de caixa para suas tomadas de decisões;',
                    'Envio de mensagens automáticas de vencimento de faturas ou de faturas vencidas para seus clientes;',
                    'Controle de produtividade por vendedor.'
                ]
            }">
                <template x-for="(funcao, index) in funcionalidades">
                    <li class="flex flex-row items-center space-x-2 text-white flex-nowrap">
                        <div class="w-4">
                            <ion-icon class="text-base text-rose-400" name="checkmark-circle-outline"></ion-icon>
                        </div>
                        <span x-text="funcao"></span>
                    </li>
                </template>
            </ul>
        </div>
        <img src="@asset('images/objetivos.png')" alt="" srcset="" class="md:w-6/12">
    </div>
</section>
