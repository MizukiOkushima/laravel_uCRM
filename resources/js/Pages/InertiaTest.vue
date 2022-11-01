
<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { ref } from 'vue'

const newTitle = ref('')
const newContent = ref('')

</script>

<template>
Inertiaテストです。<br>
<a href="/">aタグ経由です</a><br>
<Link href="/">Link経由です</Link><br>
<!-- :hrefでvue.jsのv-bindが使える リンクを動的に使える -->
<Link :href="route('inertia.index')">名前付きのルートの確認です</Link><br>
<Link :href="route('inertia.show', { id: 50 })">ルートパラメータのテストです</Link><br>

<div class-="mb-8"></div>

<!-- v-modelで入力した値を変数に代入する -->
<!-- {{ newTitle }}でリアルタイムで入力値を表示する -->
<input type="text" name="newTitle" v-model="newTitle">{{ newTitle }}<br>
<input type="text" name="newContent" v-model="newContent">{{ newContent }}<br>
<!-- methodはpostを指定 -->
<Link as="button" method="post" :href="route('inertia.store')"
:data="{
    title: newTitle,
    content: newContent
}">BD保存テスト</Link>
</template>
