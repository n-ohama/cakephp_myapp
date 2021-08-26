<?php

declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Posts seed.
 */
class PostsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => '最初の投稿',
                'description' => "<script>alert('hoge');</script>\n最初の投稿の概要\nヤッホー",
                'body' => '最初の投稿の内容',
                'published' => 1,
                'created' => '2020-05-02 10:00:00',
                'modified' => '2020-05-02 10:00:00',
            ],
            [
                'title' => '2番目の投稿',
                'description' => '2番目の投稿の概要',
                'body' => '2番目の投稿の内容',
                'published' => 1,
                'created' => '2020-05-02 10:00:00',
                'modified' => '2020-05-02 10:00:00',
            ],
            [
                'title' => '楽しい夏祭り',
                'description' => '綿菓子を買って散歩などしたり',
                'body' => '綿菓子を買って散歩などしたりさらに花火まで見た',
                'published' => 1,
                'created' => '2020-05-03 10:00:00',
                'modified' => '2020-05-03 10:00:00',
            ],
            [
                'title' => '松屋に弁当',
                'description' => 'とてもお腹空いていて、松屋の弁当を買いに行った',
                'body' => 'とてもお腹空いていて、松屋の弁当を買いに行った。みんなでそれを食べた時は幸せだった。',
                'published' => 1,
                'created' => '2020-05-04 10:00:00',
                'modified' => '2020-05-04 10:00:00',
            ],
            [
                'title' => '滝を見に行った',
                'description' => '滝に行く前の前日はとても眠れなかった。',
                'body' => '滝に行く前の前日はとても眠れなかった。当日はそのせいでとても睡眠不足状態だった。',
                'published' => 1,
                'created' => '2020-05-05 10:00:00',
                'modified' => '2020-05-05 10:00:00',
            ],
        ];

        $table = $this->table('posts');
        $table->insert($data)->save();
    }
}
