<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // First Question
        DB::table('faqs')->insert([
            'question' => 'How can you print a document from your laptop at HZ?',
            'answer' => 'Go to the website http://print.hz.nl. Log in to your account and click on LoginClick on Choose File and select the file you want to print. Click on Next. Repeat the previous step if you want to add more documents. Wait until the document has been processed and then tick the Advanced option to state whether you want double-sided or black & white printing. Click on the HZ printer or HZ plotter to print your document(s). Once the print job has been requested you must register using your HZ pass on the TouchID next to the multifunctional printer. Next, select printer option Print / Afdrukken. In the menu, select the multifunctional printer to where the job has been sent. Next, you can see which print job is ready to be printed. The print job is the completed provided there is sufficient credit on your HZ pass. When the printing is completed, press Stop on the TouchID, followed by Logout.',
        ]);

        // Second Question
        DB::table('faqs')->insert([
            'question' => 'How can you scan a document a send it to your laptop at HZ?',
            'answer' => 'Ensure you have at least €0.07 on your HZ pass. Although scanning is free, you must have this amount of credit on your HZ pass.
                        - Register using your HZ pass on the TouchID next to the multifunctional printer.
                        - In the TouchID menu, select option Scanning - Scan.
                        - Lay the original sheet on the feeder or glass plate.
                        - Press Scan and Send.
                        - Press Scan to me.
                        - Press Yes.
                        - Press the Start button.
                        The following screen appears for scanning via the glass plate. Press the green Start button on the printer to scan page by page. Once this is ready, press Start Sending. When scanning is completed, press Stop on the TouchID, followed by Logout.'
        ]);

        // Third Question
        DB::table('faqs')->insert([
            'question' => 'What do you need to do when you are sick / show symptoms of coronavirus?',
            'answer' => 'Contact the teachers/helpdesk at school and stay home. Follow the lessons on stream to compensate for that unusual sickness.'
        ]);

        // Fourth Question
        DB::table('faqs')->insert([
            'question' => 'How can you book a project space in one of the wings?',
            'answer' => 'You can book a room on the HZ page after logging in by pressing the Selfservice Portal, it should be easy from thereon out.'
        ]);

        // Fifth Question
        DB::table('faqs')->insert([
            'question' => 'What are the instructions if you want to park your car at the HZ parking lot?',
            'answer' => 'You must park your car "across the road", at the parking lot of the former PEZM.'
        ]);
    }
}
