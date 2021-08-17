<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <title>Modal Component</title>-->
<!--    <script src="https://unpkg.com/vue"></script>-->
<!--    &lt;!&ndash; template for the modal component &ndash;&gt;-->
<!--    <script type="text/x-template" id="modal-template">-->
<!--        <transition name="modal">-->
<!--            <div class="modal-mask">-->
<!--                <div class="modal-wrapper">-->
<!--                    <div class="modal-container">-->

<!--                        <div class="modal-header">-->
<!--                            <slot name="header">-->
<!--                                default header-->
<!--                            </slot>-->
<!--                        </div>-->

<!--                        <div class="modal-body">-->
<!--                            <slot name="body">-->
<!--                                <div class="relative ml-8 flex-1" id="add_good">-->
<!--                                    <form class="bg-white h-full"  method="post" action="/add_good">-->
<!--                                        @csrf-->
<!--                                        <div>-->
<!--                                            <input class="bg-white " type="text" name="load_city_name" placeholder="Місто завантаження">-->
<!--                                        </div>-->
<!--                                        <div>-->
<!--                                            <input class="bg-white " type="text" name="unload_city_name" placeholder="Місто вивантаження">-->
<!--                                        </div>-->
<!--                                        <div>-->
<!--                                            <input class="bg-white " type="text" name="weight" placeholder="Масса вантажу">-->
<!--                                        </div>-->
<!--                                        <div>-->
<!--                                            <input class="bg-white " type="text" name="good" placeholder="Назва вантажу">-->
<!--                                        </div>-->
<!--                                        <div>-->
<!--                                            <input class="bg-white " type="text" name="date" placeholder="Дата завантаження">-->
<!--                                        </div>-->
<!--                                        <button class="bg-white" type="submit">Додати вантаж</button>-->
<!--                                    </form>-->
<!--                                </div>-->
<!--                            </slot>-->
<!--                        </div>-->

<!--                        <div class="modal-footer">-->
<!--                            <slot name="footer">-->
<!--                                default footer-->
<!--                                <button class="modal-default-button" @click="$emit('close')">-->
<!--                                    OK-->
<!--                                </button>-->
<!--                            </slot>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </transition>-->
<!--    </script>-->
<!--</head>-->
<!--<body>-->


<!--<script>-->
<!--// register modal component-->
<!--import Vue from "vue";-->

<!--Vue.component("modal", {-->
<!--    template: "#modal-template"-->
<!--});-->

<!--// start app-->
<!--new Vue({-->
<!--    el: "#app",-->
<!--    data: {-->
<!--        showModal: false-->
<!--    }-->
<!--});-->
<!--</script>-->

<!--<style scoped>-->

<!--</style>-->
