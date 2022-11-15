<script setup>
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia';

// formで入力したエラー処理
defineProps({
    // Object 渡ってくる型
    errors: Object
})

// formタグをreactiveのオブジェクトにする
const form = reactive({
    // 初期値 null
    title: null,
    content: null
});

// 変数の中に関数をいれる
const submitFunction = () => {
    // postメソッドで飛ぶ先を指定
    // formを指定してtitleとcontentを飛ばす
    Inertia.post('/inertia', form)
}

</script>

<template>
    <!-- method="post"とactionについてはjavascriptに記載する -->
    <!-- submit（送信ボタン）押下時に再読み込みを行わないようにpreventを使う -->
    <form @submit.prevent="submitFunction">
        <input type="text" name="title" v-model="form.title"><br>
        <!-- v-ifでエラーがの表示 errorsタイトルが存在したら表示されます -->
        <div v-if="errors.title">{{ errors.title }}</div>
        <input type="text" name="content" v-model="form.content"><br>
        <div v-if="errors.content">{{ errors.content }}</div>
        <button>送信</button>
    </form>
</template>
