<script setup>
import { Inertia } from '@inertiajs/inertia'

defineProps({
    // id はキーの指定 Stringで型の指定
    id : String,
    // 1件だけだとObject型にする 複数件だとarray型にする
    blog: Object
})

const deleteConfirm = id => {
    // console.log(id)
    Inertia.delete(`/inertia/${id}`, {
        onBefore: () => confirm('本当に削除しますか？')
    })
}

</script>

<template>
    {{ id }}<br>
    {{ blog.title }}
    <button @click="deleteConfirm(blog.id)">削除</button>
</template>
