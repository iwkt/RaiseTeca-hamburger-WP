const foodMenu = {
  data(){
    return {
      foodItems: [
        {
          sn: 1,
          category: 'バーガー',
          names: [
            'ハンバーガー',
            'チーズバーガー',
            'テリヤキバーガー',
            'アボガドバーガー',
            'フィッシュバーガー',
            'ベーコンバーガー',
            'チキンバーガー',
          ]
        },
        {
          sn: 2,
          category: 'サイド',
          names: [
            'ポテト',
            'サラダ',
            'ナゲット',
            'コーン',
            'フィッシュバーガー',
            'イチゴショート'
          ]
        },
        {
          sn: 3,
          category: 'ドリンク',
          names: [
            'コーラ',
            'ファンタ',
            'オレンジ',
            'アップル',
            '紅茶（Ice/Hot）',
            'コーヒー（Ice/Hot）',
          ]
        },
      ]
    }
  }
}

const fm = Vue.createApp(foodMenu);
fm.mount('#foodMenu');