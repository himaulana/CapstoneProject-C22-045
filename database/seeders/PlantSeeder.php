<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Plant;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plant::insert([
            [
                "family" => "Bacillariaceae",
                "botanic_name" => "Nitzschia umbonata (Ehrenb.) Lange-Bert.",
                "name" => "Nitzschia umbonata",
                "type" => "Bacillariophyceae",
                "link_image" => "https://source.unsplash.com/random/300x300/?decorative-plant",
                "rating" => "8",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, fugiat nostrum. Quae, voluptate? Cumque rem voluptatum labore, culpa temporibus dolore repudiandae, mollitia ducimus quibusdam, provident odio sequi distinctio dolor repellendus!",
                "how_plant" => "Lorem ipsum dolor sit amet",
                "care_plant" => " consectetur adipisicing elit. Quo",
                "pest_disease" => " eaque. Laboriosam itaque animi perspiciatis praesentium saepe nobis cum ad omnis vero esse",
            ],
            [
                "family" => "Chaetophoraceae",
                "botanic_name" => "Sporocladopsis novae-zelandiae V.J.Chapm.",
                "name" => "Sporocladopsis novae-zelandiae",
                "type" => "Chlorophyceae",
                "link_image" => "https://source.unsplash.com/random/300x300/?decorative-plant",
                "rating" => "8",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, fugiat nostrum. Quae, voluptate? Cumque rem voluptatum labore, culpa temporibus dolore repudiandae, mollitia ducimus quibusdam, provident odio sequi distinctio dolor repellendus!",
                "how_plant" => "Lorem ipsum dolor sit amet",
                "care_plant" => " consectetur adipisicing elit. Quo",
                "pest_disease" => " eaque. Laboriosam itaque animi perspiciatis praesentium saepe nobis cum ad omnis vero esse",
            ],
            [
                "family" => "Coelosphaeriaceae",
                "botanic_name" => "Snowella lacustris (Chodat) Komarek & Hindak",
                "name" => "Snowella lacustris",
                "type" => "Cyanophyceae",
                "link_image" => "https://source.unsplash.com/random/300x300/?decorative-plant",
                "rating" => "8",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, fugiat nostrum. Quae, voluptate? Cumque rem voluptatum labore, culpa temporibus dolore repudiandae, mollitia ducimus quibusdam, provident odio sequi distinctio dolor repellendus!",
                "how_plant" => "Lorem ipsum dolor sit amet",
                "care_plant" => " consectetur adipisicing elit. Quo",
                "pest_disease" => " eaque. Laboriosam itaque animi perspiciatis praesentium saepe nobis cum ad omnis vero esse",
            ],
            [
                "family" => "Dictyotaceae",
                "botanic_name" => "Dictyopteris delicatula J.V.Lamour.",
                "name" => "Dictyopteris delicatula",
                "type" => "Phaeophyceae",
                "link_image" => "https://source.unsplash.com/random/300x300/?decorative-plant",
                "rating" => "8",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, fugiat nostrum. Quae, voluptate? Cumque rem voluptatum labore, culpa temporibus dolore repudiandae, mollitia ducimus quibusdam, provident odio sequi distinctio dolor repellendus!",
                "how_plant" => "Lorem ipsum dolor sit amet",
                "care_plant" => " consectetur adipisicing elit. Quo",
                "pest_disease" => " eaque. Laboriosam itaque animi perspiciatis praesentium saepe nobis cum ad omnis vero esse",
            ],
            [
                "family" => "Gracilariaceae",
                "botanic_name" => "Gracilaria arcuata Zanardini",
                "name" => "Gracilaria arcuata",
                "type" => "Florideophyceae",
                "link_image" => "https://source.unsplash.com/random/300x300/?decorative-plant",
                "rating" => "8",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, fugiat nostrum. Quae, voluptate? Cumque rem voluptatum labore, culpa temporibus dolore repudiandae, mollitia ducimus quibusdam, provident odio sequi distinctio dolor repellendus!",
                "how_plant" => "Lorem ipsum dolor sit amet",
                "care_plant" => " consectetur adipisicing elit. Quo",
                "pest_disease" => " eaque. Laboriosam itaque animi perspiciatis praesentium saepe nobis cum ad omnis vero esse",
            ],
            [
                "family" => "Leptolyngbyaceae",
                "botanic_name" => "Planktolyngbya limnetica (Lemmerm.) Komark.-Legn. & Cronberg",
                "name" => "Planktolyngbya limnetica",
                "type" => "Cyanophyceae",
                "link_image" => "https://source.unsplash.com/random/300x300/?decorative-plant",
                "rating" => "8",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, fugiat nostrum. Quae, voluptate? Cumque rem voluptatum labore, culpa temporibus dolore repudiandae, mollitia ducimus quibusdam, provident odio sequi distinctio dolor repellendus!",
                "how_plant" => "Lorem ipsum dolor sit amet",
                "care_plant" => " consectetur adipisicing elit. Quo",
                "pest_disease" => " eaque. Laboriosam itaque animi perspiciatis praesentium saepe nobis cum ad omnis vero esse",
            ],
            [
                "family" => "Naviculaceae",
                "botanic_name" => "Gyrosigma spencerii (Bailey ex E.J.Quekett) Griff. & Henfr.",
                "name" => "Gyrosigma spencerii",
                "type" => "Bacillariophyceae",
                "link_image" => "https://source.unsplash.com/random/300x300/?decorative-plant",
                "rating" => "8",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, fugiat nostrum. Quae, voluptate? Cumque rem voluptatum labore, culpa temporibus dolore repudiandae, mollitia ducimus quibusdam, provident odio sequi distinctio dolor repellendus!",
                "how_plant" => "Lorem ipsum dolor sit amet",
                "care_plant" => " consectetur adipisicing elit. Quo",
                "pest_disease" => " eaque. Laboriosam itaque animi perspiciatis praesentium saepe nobis cum ad omnis vero esse",
            ],
            [
                "family" => "Oedogoniaceae",
                "botanic_name" => "Oedogonium wolleanum Wittr. ex Hirn",
                "name" => "Oedogonium wolleanum",
                "type" => "Chlorophyceae",
                "link_image" => "https://source.unsplash.com/random/300x300/?decorative-plant",
                "rating" => "8",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, fugiat nostrum. Quae, voluptate? Cumque rem voluptatum labore, culpa temporibus dolore repudiandae, mollitia ducimus quibusdam, provident odio sequi distinctio dolor repellendus!",
                "how_plant" => "Lorem ipsum dolor sit amet",
                "care_plant" => " consectetur adipisicing elit. Quo",
                "pest_disease" => " eaque. Laboriosam itaque animi perspiciatis praesentium saepe nobis cum ad omnis vero esse",
            ],
            [
                "family" => "Rhipiliaceae",
                "botanic_name" => "Rhipilia sinuosa W.J.Gilbert",
                "name" => "Rhipilia sinuosa",
                "type" => "Ulvophyceae",
                "link_image" => "https://source.unsplash.com/random/300x300/?decorative-plant",
                "rating" => "8",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, fugiat nostrum. Quae, voluptate? Cumque rem voluptatum labore, culpa temporibus dolore repudiandae, mollitia ducimus quibusdam, provident odio sequi distinctio dolor repellendus!",
                "how_plant" => "Lorem ipsum dolor sit amet",
                "care_plant" => " consectetur adipisicing elit. Quo",
                "pest_disease" => " eaque. Laboriosam itaque animi perspiciatis praesentium saepe nobis cum ad omnis vero esse",
            ],
            [
                "family" => "Rhodymeniaceae",
                "botanic_name" => "Rhodymenia leptophylla J.Agardh",
                "name" => "Rhodymenia leptophylla",
                "type" => "Florideophyceae",
                "link_image" => "https://source.unsplash.com/random/300x300/?decorative-plant",
                "rating" => "8",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, fugiat nostrum. Quae, voluptate? Cumque rem voluptatum labore, culpa temporibus dolore repudiandae, mollitia ducimus quibusdam, provident odio sequi distinctio dolor repellendus!",
                "how_plant" => "Lorem ipsum dolor sit amet",
                "care_plant" => " consectetur adipisicing elit. Quo",
                "pest_disease" => " eaque. Laboriosam itaque animi perspiciatis praesentium saepe nobis cum ad omnis vero esse",

            ],
            [
                "family" => "Solieriaceae",
                "botanic_name" => "Eucheuma speciosum (Sond.) J.Agardh",
                "name" => "Eucheuma speciosum",
                "type" => "Florideophyceae",
                "link_image" => "https://source.unsplash.com/random/300x300/?decorative-plant",
                "rating" => "8",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, fugiat nostrum. Quae, voluptate? Cumque rem voluptatum labore, culpa temporibus dolore repudiandae, mollitia ducimus quibusdam, provident odio sequi distinctio dolor repellendus!",
                "how_plant" => "Lorem ipsum dolor sit amet",
                "care_plant" => " consectetur adipisicing elit. Quo",
                "pest_disease" => " eaque. Laboriosam itaque animi perspiciatis praesentium saepe nobis cum ad omnis vero esse",

            ],
            [
                "family" => "Udoteaceae",
                "botanic_name" => "Pseudochlorodesmis furcellata (Zanardini) Boergesen",
                "name" => "Pseudochlorodesmis furcellata",
                "type" => "Ulvophyceae",
                "link_image" => "https://source.unsplash.com/random/300x300/?decorative-plant",
                "rating" => "8",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, fugiat nostrum. Quae, voluptate? Cumque rem voluptatum labore, culpa temporibus dolore repudiandae, mollitia ducimus quibusdam, provident odio sequi distinctio dolor repellendus!",
                "how_plant" => "Lorem ipsum dolor sit amet",
                "care_plant" => " consectetur adipisicing elit. Quo",
                "pest_disease" => " eaque. Laboriosam itaque animi perspiciatis praesentium saepe nobis cum ad omnis vero esse",
            ],
            [
                "family" => "Acanthaceae",
                "botanic_name" => "Dipteracanthus australasicus F.Muell. subsp. australasicus",
                "name" => "Dipteracanthus australasicus subsp. australasicus",
                "type" => "Equisetopsida",
                "link_image" => "https://source.unsplash.com/random/300x300/?decorative-plant",
                "rating" => "8",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, fugiat nostrum. Quae, voluptate? Cumque rem voluptatum labore, culpa temporibus dolore repudiandae, mollitia ducimus quibusdam, provident odio sequi distinctio dolor repellendus!",
                "how_plant" => "Lorem ipsum dolor sit amet",
                "care_plant" => " consectetur adipisicing elit. Quo",
                "pest_disease" => " eaque. Laboriosam itaque animi perspiciatis praesentium saepe nobis cum ad omnis vero esse",
            ],
            [
                "family" => "Amaranthaceae",
                "botanic_name" => "Achyranthes bidentata Blume",
                "name" => "Achyranthes bidentata",
                "type" => "Equisetopsida",
                "link_image" => "https://source.unsplash.com/random/300x300/?decorative-plant",
                "rating" => "8",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, fugiat nostrum. Quae, voluptate? Cumque rem voluptatum labore, culpa temporibus dolore repudiandae, mollitia ducimus quibusdam, provident odio sequi distinctio dolor repellendus!",
                "how_plant" => "Lorem ipsum dolor sit amet",
                "care_plant" => " consectetur adipisicing elit. Quo",
                "pest_disease" => " eaque. Laboriosam itaque animi perspiciatis praesentium saepe nobis cum ad omnis vero esse",
            ],
            [
                "family" => "Anacardiaceae",
                "botanic_name" => "Semecarpus australiensis Engl.",
                "name" => "Semecarpus australiensis",
                "type" => "Equisetopsida",
                "link_image" => "https://source.unsplash.com/random/300x300/?decorative-plant",
                "rating" => "8",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, fugiat nostrum. Quae, voluptate? Cumque rem voluptatum labore, culpa temporibus dolore repudiandae, mollitia ducimus quibusdam, provident odio sequi distinctio dolor repellendus!",
                "how_plant" => "Lorem ipsum dolor sit amet",
                "care_plant" => " consectetur adipisicing elit. Quo",
                "pest_disease" => " eaque. Laboriosam itaque animi perspiciatis praesentium saepe nobis cum ad omnis vero esse",
            ],
            [
                "family" => "Apocynaceae",
                "botanic_name" => "Cynanchum leptolepis (Benth.) Domin",
                "name" => "Cynanchum leptolepis",
                "type" => "Equisetopsida",
                "link_image" => "https://source.unsplash.com/random/300x300/?decorative-plant",
                "rating" => "8",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, fugiat nostrum. Quae, voluptate? Cumque rem voluptatum labore, culpa temporibus dolore repudiandae, mollitia ducimus quibusdam, provident odio sequi distinctio dolor repellendus!",
                "how_plant" => "Lorem ipsum dolor sit amet",
                "care_plant" => " consectetur adipisicing elit. Quo",
                "pest_disease" => " eaque. Laboriosam itaque animi perspiciatis praesentium saepe nobis cum ad omnis vero esse",
            ],
            [
                "family" => "Apocynaceae",
                "botanic_name" => "Vincetoxicum ovatum Benth.",
                "name" => "Vincetoxicum ovatum",
                "type" => "Equisetopsida",
                "link_image" => "https://source.unsplash.com/random/300x300/?decorative-plant",
                "rating" => "8",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, fugiat nostrum. Quae, voluptate? Cumque rem voluptatum labore, culpa temporibus dolore repudiandae, mollitia ducimus quibusdam, provident odio sequi distinctio dolor repellendus!",
                "how_plant" => "Lorem ipsum dolor sit amet",
                "care_plant" => " consectetur adipisicing elit. Quo",
                "pest_disease" => " eaque. Laboriosam itaque animi perspiciatis praesentium saepe nobis cum ad omnis vero esse",
            ],
            [
                "family" => "Arecaceae",
                "botanic_name" => "Archontophoenix tuckeri Dowe",
                "name" => "Archontophoenix tuckeri",
                "type" => "Equisetopsida",
                "link_image" => "https://source.unsplash.com/random/300x300/?decorative-plant",
                "rating" => "8",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, fugiat nostrum. Quae, voluptate? Cumque rem voluptatum labore, culpa temporibus dolore repudiandae, mollitia ducimus quibusdam, provident odio sequi distinctio dolor repellendus!",
                "how_plant" => "Lorem ipsum dolor sit amet",
                "care_plant" => " consectetur adipisicing elit. Quo",
                "pest_disease" => " eaque. Laboriosam itaque animi perspiciatis praesentium saepe nobis cum ad omnis vero esse",
            ],
            [
                "family" => "Asteraceae",
                "botanic_name" => "Arctotis stoechadifolia P.J.Bergius",
                "name" => "Arctotis stoechadifolia",
                "type" => "Equisetopsida",
                "link_image" => "https://source.unsplash.com/random/300x300/?decorative-plant",
                "rating" => "8",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, fugiat nostrum. Quae, voluptate? Cumque rem voluptatum labore, culpa temporibus dolore repudiandae, mollitia ducimus quibusdam, provident odio sequi distinctio dolor repellendus!",
                "how_plant" => "Lorem ipsum dolor sit amet",
                "care_plant" => " consectetur adipisicing elit. Quo",
                "pest_disease" => " eaque. Laboriosam itaque animi perspiciatis praesentium saepe nobis cum ad omnis vero esse",
            ],
            [
                "family" => "Asteraceae",
                "botanic_name" => "Centratherum riparium (A.Cunn. ex DC.) A.R.Bean",
                "name" => "Centratherum riparium",
                "type" => "Equisetopsida",
                "link_image" => "https://source.unsplash.com/random/300x300/?decorative-plant",
                "rating" => "8",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, fugiat nostrum. Quae, voluptate? Cumque rem voluptatum labore, culpa temporibus dolore repudiandae, mollitia ducimus quibusdam, provident odio sequi distinctio dolor repellendus!",
                "how_plant" => "Lorem ipsum dolor sit amet",
                "care_plant" => " consectetur adipisicing elit. Quo",
                "pest_disease" => " eaque. Laboriosam itaque animi perspiciatis praesentium saepe nobis cum ad omnis vero esse",
            ],
            [
                "family" => "Asteraceae",
                "botanic_name" => "Lagenophora brachyglossa Jian Wang ter & A.R.Bean",
                "name" => "Lagenophora brachyglossa",
                "type" => "Equisetopsida",
                "link_image" => "https://source.unsplash.com/random/300x300/?decorative-plant",
                "rating" => "8",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, fugiat nostrum. Quae, voluptate? Cumque rem voluptatum labore, culpa temporibus dolore repudiandae, mollitia ducimus quibusdam, provident odio sequi distinctio dolor repellendus!",
                "how_plant" => "Lorem ipsum dolor sit amet",
                "care_plant" => " consectetur adipisicing elit. Quo",
                "pest_disease" => " eaque. Laboriosam itaque animi perspiciatis praesentium saepe nobis cum ad omnis vero esse",
            ],
        ]);
    }
}
