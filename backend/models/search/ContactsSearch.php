<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Contacts;

/**
 * ContactsSearch represents the model behind the search form of `common\models\Contacts`.
 */
class ContactsSearch extends Contacts
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['addres', 'email', 'first_phone', 'second_phone', 'third_phone', 'telegram_link', 'instagram_link', 'facebook_link', 'twitter_link', 'postal_code'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Contacts::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'addres', $this->addres])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'first_phone', $this->first_phone])
            ->andFilterWhere(['like', 'second_phone', $this->second_phone])
            ->andFilterWhere(['like', 'third_phone', $this->third_phone])
            ->andFilterWhere(['like', 'telegram_link', $this->telegram_link])
            ->andFilterWhere(['like', 'instagram_link', $this->instagram_link])
            ->andFilterWhere(['like', 'facebook_link', $this->facebook_link])
            ->andFilterWhere(['like', 'twitter_link', $this->twitter_link])
            ->andFilterWhere(['like', 'postal_code', $this->postal_code]);

        return $dataProvider;
    }
}
