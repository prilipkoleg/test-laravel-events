<?php

use App\Models\MailTemplate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MailTemplatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MailTemplate::create([
            "name"      => "default",
            "content"   => "<p>Lorem ipsum dolor sit amet, ut sit nihil vocibus antiopam. Te cum vitae dissentiet. Cu quod reprehendunt vix. Ut iusto numquam nominati mei, eam ne wisi suscipiantur, pri et sint oporteat postulant. Te sint omnes interesset mea, ex quod accusata prodesset mea. Sea et delectus sententiae.</p>
                            <p>Mel at suas affert mucius, ullum similique maiestatis quo ad. No nonumy altera audire mea, tantas placerat disputationi ad ius. Mea vocibus consequuntur at. Nec diam moderatius necessitatibus an, cum meis nonumy dicunt at, idque accumsan perfecto vis ex. Id vim propriae euripidis, sea an populo aliquam.</p>
                            <p>Ex sonet omnes est. Qui ne viris persequeris instructior. Rebum philosophia ius et, electram dignissim sed at, pri adhuc iisque tacimates an. Cum munere facilisi an. Vel at laudem libris, cu has omittam tincidunt. Ad putent latine quaestio sea, ne vis mazim erant veritus. Duis lucilius sadipscing et usu, quis placerat laboramus eum no, id prompta aliquid oportere vix.</p>
                            <p>Ad meliore antiopam pertinacia vis, in nullam saperet mediocritatem eos, ne quaeque civibus maiestatis nec. Hinc aliquip senserit ad has. Soluta semper tamquam nam cu, no vim suas rationibus. Duo eu melius omnesque cotidieque, et vel nobis fuisset repudiare. Mel at verear adipisci, mei hinc dolores postulant at.</p>
                            <p>Vim eu falli dolor ponderum, cum at quidam meliore insolens, pro te sint intellegam vituperatoribus. Cu eum paulo ullamcorper. Ad dictas petentium eum, cu vix brute suscipit vulputate. Commodo nostrum elaboraret in cum. Sit ad labore eirmod timeam, in mollis iriure voluptatibus vel. Et errem euripidis vituperatoribus cum, nobis audire scaevola pro ut.</p>"
        ]);

        MailTemplate::create([
            "name"      => "user.registered",
            "content"   => "Hello New User"
        ]);

        MailTemplate::create([
            "name"      => "mail.template.updated",
            "content"   => "<p>Template updated!</p>
                            <p>Vim eu falli dolor ponderum, cum at quidam meliore insolens, pro te sint intellegam vituperatoribus. Cu eum paulo ullamcorper. Ad dictas petentium eum, cu vix brute suscipit vulputate. Commodo nostrum elaboraret in cum. Sit ad labore eirmod timeam, in mollis iriure voluptatibus vel. Et errem euripidis vituperatoribus cum, nobis audire scaevola pro ut.</p>"
        ]);
    }
}
