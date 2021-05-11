<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            m_user_classificationsTableSeeder::class,
            m_usersTableSeeder::class,
            t_ordersTableSeeder::class,
            t_billing_addressesTableSeeder::class,
            t_payment_methodsTableSeeder::class,
            t_shipping_methodsTableSeeder::class,
            t_shipping_addressesTableSeeder::class,
            t_destination_classificationsTableSeeder::class,
            m_shipment_statusesTableSeeder::class,
            m_categoriesTableSeeder::class,
            m_sale_statusesTableSeeder::class,
            m_product_statusesTableSeeder::class,
            m_sellersTableSeeder::class,
            seller_favoritesTableSeeder::class,
            product_review_article_repliesTableSeeder::class,
            m_productsTableSeeder::class,
            product_review_articlesTableSeeder::class,
            t_order_detailsTableSeeder::class,
            t_purchasesTableSeeder::class,
            product_promotion_tagsTableSeeder::class,
            set_promotion_tagsTableSeeder::class,
            product_review_repliesTableSeeder::class,
            product_review_favoritesTableSeeder::class,
            product_review_reply_favoritesTableSeeder::class,
            
        ]);
            
    }
}
