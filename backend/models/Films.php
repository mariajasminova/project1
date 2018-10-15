<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "films".
 *
 * @property int $id_films
 * @property string $title
 * @property int $release_date
 * @property int $producer_id
 *
 * @property FilmGenre[] $filmGenres
 * @property Genre[] $genres
 * @property Producer $producer
 */
class Films extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'films';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['release_date', 'producer_id'], 'integer'],
            [['title'], 'string', 'max' => 20],
            [['producer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Producer::className(), 'targetAttribute' => ['producer_id' => 'id_producer']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_films' => 'Id Films',
            'title' => 'Title',
            'release_date' => 'Release Date',
            'producer_id' => 'Producer ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilmGenres()
    {
        return $this->hasMany(FilmGenre::className(), ['film_id' => 'id_films']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenres()
    {
        return $this->hasMany(Genre::className(), ['id_genre' => 'genre_id'])->viaTable('film_genre', ['film_id' => 'id_films']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducer()
    {
        return $this->hasOne(Producer::className(), ['id_producer' => 'producer_id']);
    }
}
