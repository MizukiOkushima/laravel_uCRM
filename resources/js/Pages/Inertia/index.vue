<script setup>
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
    blogs: Array
})
</script>

<template>
    <!-- フラッシュメッセージの表示(1回だけ表示) -->
    <!-- 送信ボタンを押した時にwith()が走るのでメッセージが表示される -->
    <div v-if="$page.props.flash.message" class="bg-blue-300"> {{ $page.props.flash.message }}</div>
    <ul>
        <!-- v-forでliを何度も繰り返す 単数 in 複数 :keyでidも書いておくこと id: blog.idとすると1番目、２番目と変数で指定できる -->
        <li v-for="blog in blogs" :key="blog.id">
            件名： <Link class="text-blue-400" :href="route('inertia.show', { id: blog.id })">{{ blog.title }}</Link>,
            本文： {{ blog.content }}
        </li>
    </ul>
    ああああ
</template>
