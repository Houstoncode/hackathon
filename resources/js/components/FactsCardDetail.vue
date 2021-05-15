<template>
    <div class="facts-card-detail">
        <div
            class="facts-card-detail__top"
            :style="{ backgroundImage: `url(${imgUrl})` }"
        >
            <div class="facts-card-detail__count">
                <div class="facts-card-detail__title">Факт</div>
                <div class="facts-card-detail__index">
                    <div>1</div>
                    <div>/</div>
                    <div>5</div>
                </div>
            </div>
            <div class="facts-card-detail__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit ut
                aliquam, purus sit amet luctus venenatis, lectus magna fringilla
                urna, porttitor rhoncus dolor purus non enim praesent elementum
                facilisis leo, vel
            </div>
        </div>
        <div class="facts-card-detail__bottom">
            <div class="facts-card-detail__bottom-text">
                Выберите правильный ответ:
            </div>
            <div class="facts-card-detail__bottom-block">
                <div class="facts-card-detail__bottom-block_item">
                    <div class="form_radio">
                        <input id="radio-1" type="radio" name="radio" />
                        <label for="radio-1">Ответ 1</label>
                    </div>
                    <div class="form_radio">
                        <input id="radio-2" type="radio" name="radio" />
                        <label for="radio-2">Ответ 2</label>
                    </div>
                    <div class="form_radio">
                        <input id="radio-3" type="radio" name="radio" />
                        <label for="radio-3">Ответ 3</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "FactsDetail",
    data() {
        return {
            imgUrl: "img/factsdetail/item-1.jpg"
        };
    }
};
</script>
