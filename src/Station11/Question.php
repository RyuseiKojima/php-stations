<?php

namespace Src\Station11;

class Question
{
    public function main(array $sweets): array
    {
      $budget=300;
      // 300円以下を選別
      $lessThanBudgetSweets = $this->getSweetsLessThanBudget($sweets, $budget);
      // スイーツ配列を更新
      $sweets = $lessThanBudgetSweets;
      // 300円以下の組み合わせ（キー）を取得
      $keys = $this->getRandomKeys($lessThanBudgetSweets, $budget);      
      // 組み合わせを配列で作成
      $combination = $this->makeCombination($sweets, $keys);
      return $combination;
    }

    // 予算以下を選別
    private function getSweetsLessThanBudget(array $sweets, int $budget)
    {
      $lessThanBudgetSweets = [];
      foreach ($sweets as $sweet) {
        if ($sweet['price']<=$budget) {
          $lessThanBudgetSweets[] = $sweet;
        }
      }
      return $lessThanBudgetSweets;
    }

    // 予算以下の組み合わせ（キー）を取得
    private function getRandomKeys(array $lessThanBudgetSweets, int $budget)
    {
      for ($total = 0; ; $total = 0 ) {
        // ランダムなキーを3つ取得
        $keys = array_rand($lessThanBudgetSweets, 3);
        foreach($keys as $key) {
          // 金額を合計
          $total += $lessThanBudgetSweets[$key]['price'];
        }
        if($total <= $budget) {
          // 合計が予算委内に収まれば終了
          break;
        }
      }
      return $keys;
    }

    private function makeCombination(array $sweets, array $keys)
    {
      $combination = [];
      foreach ($keys as $key) {
        // 3種類の組み合わせ配列を作成
        array_push($combination, $sweets[$key]);
      }
      return $combination;
    }
}

// $sweets = [
//   ['name' => '飴玉', 'price' => 50],
//   ['name' => '綿菓子', 'price' => 300],
//   ['name' => 'チョコレート', 'price' => 88],
//   ['name' => 'うまい棒', 'price' => 10],
//   ['name' => 'ポテチ', 'price' => 400],
//   ['name' => 'アイスクリーム', 'price' => 350],
//   ['name' => 'ポッキー', 'price' => 100],
//   ['name' => 'グミ', 'price' => 30],
// ];

// (new Question())->main($sweets);

