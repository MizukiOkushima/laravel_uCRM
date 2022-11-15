<script setup>
// @/でresorces/jsからルート指定できる
import GuestLayout from '@/Layouts/GuestLayout.vue'
import Label from '@/Components/InputLabel.vue'
import Input from '@/Components/TextInput.vue'

const emitTest = e => console.log(e)

</script>
<template>
    <!-- GuestLayout スロット機能 -->
    <GuestLayout>
        <Label value="件名">タイトル</Label>
        <Input
            modelValue="初期値が入ります"
            @update:modelValue="emitTest"
        ></Input>
    </GuestLayout>
</template>
