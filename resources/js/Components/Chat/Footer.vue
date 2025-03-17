<template>
    <footer
        id="page-footer"
        class="fixed bottom-0 end-0 start-0 items-center border-t border-slate-200/75 bg-white lg:start-80"
    >
    {{ shift }}
        <textarea
            v-model="message"
            v-on:keydown.enter.prevent="handleEnter"
            v-on:keydown.shift="shift = true"
            v-on:keyup="shift = false"
            class="-mx-5 block w-full rounded-lg border-0 px-5 py-4 leading-6 focus:border-indigo-500 focus:ring focus:ring-indigo-500/75"
            placeholder="Type a message here"
        >
        </textarea>
    </footer>
</template>

<script setup>
import { ref } from "vue";

    const message = ref('');
    const emit = defineEmits();
    const shift = ref(false);

    const handleEnter = (e) => { //envia msg pressionando o enter
        if(shift.value && message.value.length > 0) { //add uma quebra de linha no texto se apertar shift + enter
            message.value += "\n";
            return;
        }

        if(message.value.length) {
            emit("valid", )
            message.value = ""
        }
    }
</script>

<style scoped>
    footer {
        margin-left: 30px;
    }
</style>
