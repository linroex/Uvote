<?php
class IssuesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $issues = [
            [
                'title' => '校園餐廳食安問題',
                'content' => '的區也是好生的下家站設客笑，無金路……我程不……一巴大族受分物好者生景己來水我可，經地查會他利，檢國老境會。出相酒作心。會參到動……黃的的名是的臺，受得行改家定死視聲重技大很間成還？高詩過約場我立現然一日隨有話式物明好，銀場心。文風目家即念牛養，上係他天景然委持司中。',
                'category' => 4,
                'uid' => 1
            ],
            [
                'title' => '自行車停放空間不足',
                'content' => '臺沒出太於品大卻……電聽處食國的上樂立我那主了，解懷世，一何而……需民在在小成成遠毛全治大？他麼用上的單局友不美量具話術只她開過投找要這東出氣農的子，在研青吸音，熱地況明樣走院內：反麼是西住己兒方內家生，有以到們上可，過苦先起王以子實化較道那路大經們山場度創立石全地。',
                'category' => 3,
                'uid' => 1
            ],
            [
                'title' => '機車擦撞',
                'content' => '火因是開童機時：於手達好究收看神水衣大的走方沒家了的結很雙再為依工價大大合入消對書公工通文地的世議美會了：安招平保龍上手、目有目神象人了的過表裝生解成給然然一怎面單時樣時內以持到臺、裡長希都：一自外使等是想開生起防位回人率利分意道可。',
                'category' => 3,
                'uid' => 2
            ],
            [
                'title' => '宿舍門禁問題',
                'content' => '法阿路事方黨公我高感又：復小友，然年時。化報為小著回自助府業朋怎的收去寫身裡向可財河外場，我而是西間最羅爸放可生學電元要然己不卻：你機取得必數的現是。實企上年容，當國此、團數奇消可父。空險舉想院密這對人解我工不另技當上了，資加常到人心無會。',
                'category' => 2,
                'uid' => 2
            ]
        ];

        foreach ($issues as $issue_content)
            Issues::create($issue_content);

        IssuesComments::createComment(1, '測試回應1', 1);
        IssuesComments::createComment(1, '測試回應2', 1);
        IssuesComments::createComment(1, '測試回應：官方', 2);
        IssuesComments::createComment(1, '測試回應4', 1);

        IssuesVote::vote(1, 'agree', 1);
        IssuesVote::vote(1, 'disagree', 2);

        IssuesVote::vote(2, 'agree', 1);
        IssuesVote::vote(2, 'agree', 2);

    }

}

