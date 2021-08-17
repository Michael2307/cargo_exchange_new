<template>
    <transition name="modal">
    <div class="modal-mask">
        <div class="modal-wrapper">
            <div class="modal-container">

                <div class="modal-header">
                    <slot name="header">
                        default header
                    </slot>
                </div>
                <div class="modal-body">
                    <slot name="body">
                        <div class="relative ml-8 flex-1" id="add-form">
                            <form class="bg-white h-full"  method="post">
                                @csrf
                                <div>
                                    <input class="bg-white " type="text" name="load_city_name" placeholder="Місто завантаження">
                                </div>
                                <div>
                                    <input class="bg-white " type="text" name="unload_city_name" placeholder="Місто вивантаження">
                                </div>
                                <div>
                                    <input class="bg-white " type="text" name="weight" placeholder="Масса вантажу">
                                </div>
                                <div>
                                    <input class="bg-white " type="text" name="good" placeholder="Назва вантажу">
                                </div>
                                <div>
                                    <input class="bg-white " type="text" name="date" placeholder="Дата завантаження">
                                </div>
                            </form>
                        </div>
                    </slot>
                </div>

                <div class="modal-footer">
                    <slot name="footer">
                        default footer
                        <button class="bg-white" type="submit"  @click="">Додати вантаж</button>
                        <button class="modal-default-button" @click="$emit('close')">
                            OK
                        </button>
                    </slot>
                </div>
            </div>
        </div>
    </div>
    </transition>
</template>


<script>
export default {
    name: "modal"
}
</script>
<style scoped>

</style>
