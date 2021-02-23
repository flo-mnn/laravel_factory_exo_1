<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->insert([
            [
                "name"=>"Code",
                "description"=>"Definition of Coding
                We may not have reached into the future where we can travel in flying cars yet, but we have advanced leaps and bounds into a high-tech society. Nowadays, everything is computer-aided- from your alarm clock to your coffee machine to automated cars and even your home lights (Hi Alexa! Ok, Google!).
                
                None of these would have been possible without computers, and the language that runs them - is coding.
                
                Coding, in simpler terms, means feeding our commands in the computer in a language the computer understands, so that the computer can carry out the said command, and perform the task.
                
                It is, therefore, not an exaggeration to say that coding runs the future that we are living in the present."
            ],
            [
                "name"=>"Digital Marketing",
                "description"=> "What is digital marketing?
                At a high level, digital marketing refers to advertising delivered through digital channels such as search engines, websites, social media, email, and mobile apps. Using these online media channels, digital marketing is the method by which companies endorse goods, services, and brands. Consumers heavily rely on digital means to research products. For example, Think with Google marketing insights found that 48% of consumers start their inquiries on search engines, while 33% look to brand websites and 26% search within mobile applications.
                
                While modern day digital marketing is an enormous system of channels to which marketers simply must onboard their brands, advertising online is much more complex than the channels alone. In order to achieve the true potential of digital marketing, marketers have to dig deep into today’s vast and intricate cross-channel world to discover strategies that make an impact through engagement marketing. Engagement marketing is the method of forming meaningful interactions with potential and returning customers based on the data you collect over time. By engaging customers in a digital landscape, you build brand awareness, set yourself as an industry thought leader, and place your business at the forefront when the customer is ready to buy.
                
                By implementing an omnichannel digital marketing strategy, marketers can collect valuable insights into target audience behaviors while opening the door to new methods of customer engagement. Additionally, companies can expect to see an increase in retention. According to a report by Invesp, companies with strong omnichannel customer engagement strategies retain an average of 89% of their customers compared to companies with weak omnichannel programs that have a retention rate of just 33%. 
                
                As for the future of digital marketing, we can expect to see a continued increase in the variety of wearable devices available to consumers. Forbes also forecasts that social media will become increasingly conversational in the B2B space, video content will be refined for search engine optimization (SEO) purposes, and email marketing will become even more personalized.
                
                'Digital is at the core of everything in marketing today—it has gone from ‘one of the things marketing does’ to ‘THE thing that marketing does.’"
            ],
            [
                "name"=>"TIC Formations",
                "description"=>"Les chèques TIC, qu'est-ce que c'est ?
                Word, Excel, Powerpoint et Outlook. Il s’agit de quatre programmes informatiques essentiels pour ceux qui ont ou cherchent un emploi de bureau. La connaissance de logiciels comme Photoshop ou InDesign est aussi de plus en plus un atout. Vous voulez apprendre à les maîtriser pour pouvoir les ajouter à votre CV ? Avec un chèque TIC Actiris, vous pouvez suivre une formation gratuite dans un centre agréé. Votre budget total est de 2240€.
                
                Parlez du chèque TIC à votre consultant Actiris. Il vous orientera ensuite vers le cours qui correspond le mieux à votre niveau ou aux exigences de votre futur emploi. "
            ],
            [
                "name"=>"Lift Entrepreneurs",
                "description"=>"Entrepreneurship is the act of creating a business or businesses while building and scaling it to generate a profit.

                But as a basic entrepreneurship definition, that one is a bit limiting. The more modern entrepreneurship definition is also about transforming the world by solving big problems. Like bringing about social change or creating an innovative product that challenges the status quo of how we live our lives on a daily basis.
                
                What the entrepreneurship definition doesn’t tell you is that entrepreneurship is what people do to take their career and dreams into their hands and lead it in the direction they want. 
                
                It’s about building a life on your own terms. No bosses. No restricting schedules. And no one holding you back. Entrepreneurs are able to take the first step into making the world a better place – for everyone in it, including themselves."
            ],
            [
                "name"=>"AWS",
                "description"=>"Le Cloud computing est en plein essor et a besoin de toi pour continuer à se développer !

                AWS re/Start et MolenGeek sont enthousiastes à l’idée de créer une filière mondiale inclusive et diversifiée de
                nouveaux talents dans le Cloud.
                
                AWS propose une technologie permettant plein de possibilités telles que la gestion de données d’une entreprise.
                
                Tu apprendras à mettre en réseau, diffuser du contenu ou encore utiliser ces outils de développement pour une entreprise que ce soit pour ses services mobiles ou ses applications."
            ],
            [
                "name"=>"Google Suite",
                "description"=>"G Suite est la suite d’applications intelligentes de Google. C’était auparavant connu sous le nom de Google Apps, jusqu’à ce que cela soit rebaptisé fin 2016. Nous recommandons principalement G Suite pour les clients qui ont besoin d’hébergement d’emails pour leur entreprise. Cependant, G Suite est bien plus que cela. Il inclut également une variété d’applications et de fonctionnalités qui peuvent s’avérer très pratiques. En fait, vous en utilisez probablement déjà ou en connaissez certains."
            ],
        ]);
    }
}
