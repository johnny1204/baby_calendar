<template>
    <div
        v-show="showModal"
        class="overlay w-full h-full fixed z-1 flex items-center justify-center"
        @click="$emit('close-modal')"
    >
        <div
            class="modal w-3/4 md:w-2/4 z-100 bg-white visible opacity-100 p-3"
            @click.stop="stopBubbling"
        >
            <ul class="modal-contents py-5 mx-auto my-0 w-auto">
                <li class="flex content-around p-1 mb-3">
                    <span class="label w-20 p-1">日時</span>
                    <input
                        v-model="datetime"
                        class="border-solid w-full border border-gray-400 rounded p-1"
                        type="text"
                    />
                </li>
                <li class="flex content-around p-1 mb-3">
                    <span class="label w-20 p-1" for="sleep">睡眠</span>
                    <label>
                        <input
                            v-model="sleepChecked"
                            name="sleep"
                            type="checkbox"
                            class="w-5 p-1"
                        />
                        睡眠中
                    </label>
                </li>
                <li class="flex content-around p-1 mb-3">
                    <span class="label w-20 p-1" for="sleep">排泄</span>
                    <label>
                        <input
                            v-model="smallChecked"
                            type="checkbox"
                            class="w-5 p-1"
                            name="sleep"
                        />
                        尿
                    </label>
                    <label>
                        <input
                            v-model="bigChecked"
                            type="checkbox"
                            class="w-5 p-1"
                            name="sleep"
                        />
                        便
                    </label>
                </li>
                <li class="flex content-around p-1">
                    <span class="label w-20 p-1">その他</span>
                    <input
                        class="mb-3 border-solid border w-full border-gray-400 rounded p-1"
                        type="text"
                    />
                </li>
            </ul>
            <div class="text-center m-2.5">
                <button
                    class="border-solid border border-green-600 bg-green-600 rounded px-10 py-2 text-gray-200 font-semibold"
                    @click="submit"
                >
                    保存
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        showModal: {
            type: Boolean,
            default: false
        },
        time: {
            type: String,
            default: null
        },
        checked: {
            type: Boolean,
            default: false
        }
    },
    data: () => {
        return {
            sleepChecked: false,
            smallChecked: false,
            bigChecked: false
        };
    },
    computed: {
        datetime: {
            get() {
                return this.$props.time;
            },
            set(value) {
                this.$emit('change', value);
            }
        }
    },
    methods: {
        stopBubbling() {
            return false;
        },
        submit() {
            console.log('test');
        }
    }
};
</script>

<style>
.overlay {
    background-color: rgba(0, 0, 0, 0.5);
}
</style>
