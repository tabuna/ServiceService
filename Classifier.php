<?php

/**
 * Class Type
 */
class Type
{
    const POSITIVE = 'positive';
    const NEGATIVE = 'negative';
}

/**
 * Class Classifier
 */
class Classifier
{
    /**
     * @var array
     */
    private $types = [Type::POSITIVE, Type::NEGATIVE];
    /**
     * @var array
     */
    private $words = [Type::POSITIVE => [], Type::NEGATIVE => []];
    /**
     * @var array
     */
    private $documents = [Type::POSITIVE => 0, Type::NEGATIVE => 0];

    /**
     * @param $statement
     * @return mixed|null
     */
    public function guess($statement)
    {
        $words = $this->getWords($statement);
        $best_likelihood = 0;
        $best_type = null;

        foreach ($this->types as $type) {
            $likelihood = $this->pTotal($type);

            foreach ($words as $word) {
                $likelihood *= $this->p($word, $type);
            }

            if ($likelihood > $best_likelihood) {
                $best_likelihood = $likelihood;
                $best_type = $type;
            }
        }

        return $best_type;
    }

    /**
     * @param $string
     * @return array
     */
    public function getWords($string)
    {
        return preg_split('/\s+/', preg_replace('/[^A-Za-z0-9\s]/', '', strtolower($string)));
    }

    /**
     * @param $type
     * @return float|int
     */
    public function pTotal($type)
    {
        return ($this->documents[$type] + 1) / (array_sum($this->documents) + 1);
    }

    /**
     * @param $word
     * @param $type
     * @return float|int
     */
    public function p($word, $type)
    {
        $count = 0;

        if (isset($this->words[$type][$word])) {
            $count = $this->words[$type][$word];
        }

        return ($count + 1) / (array_sum($this->words[$type]) + 1);
    }

    /**
     * @param $statement
     * @param $type
     */
    public function learn($statement, $type)
    {
        $words = $this->getWords($statement);

        foreach ($words as $word) {
            if (!isset($this->words[$type][$word])) {
                $this->words[$type][$word] = 0;
            }
            $this->words[$type][$word]++;
        }
        $this->documents[$type]++;
    }
}

$classifier = new Classifier();

/**
 * Позитивыне
 */

$classifier->learn('Прикольно', Type::POSITIVE);
$classifier->learn('классненько', Type::POSITIVE);
$classifier->learn('как интересно', Type::POSITIVE);
$classifier->learn('отличная идея', Type::POSITIVE);
$classifier->learn('круто', Type::POSITIVE);
$classifier->learn('супер', Type::POSITIVE);
$classifier->learn('это да', Type::POSITIVE);
$classifier->learn('окей', Type::POSITIVE);
$classifier->learn('это да', Type::POSITIVE);
$classifier->learn('хорошая идея', Type::POSITIVE);
$classifier->learn('вот это да', Type::POSITIVE);

/**
 * Негативные
 */
$classifier->learn('плохо', Type::NEGATIVE);
$classifier->learn('Путин', Type::NEGATIVE);

$classifier->learn('плохо', Type::NEGATIVE);
$classifier->learn('Путин', Type::NEGATIVE);
$classifier->learn('Путин чёт хрень', Type::NEGATIVE);
$classifier->learn('Без симфони хуёво', Type::NEGATIVE);

var_dump($classifier->guess('путин плохо играет в гольф'));
var_dump($classifier->guess('тусклое хлебало'));