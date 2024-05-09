<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if ($arResult["isFormErrors"] == "Y"):?><?= $arResult["FORM_ERRORS_TEXT"]; ?><? endif; ?>
<?= $arResult["FORM_NOTE"] ?>
<? if ($arResult["isFormNote"] != "Y") {
    ?>
    <div class="contact-form">
        <div class="contact-form__head">
            <div class="contact-form__head-title">Связаться</div>
            <div class="contact-form__head-text">Наши сотрудники помогут выполнить подбор услуги и&nbsp;расчет цены с&nbsp;учетом
                ваших требований
            </div>
        </div>
        <?= str_replace('<form', '<form class="contact-form__form" action="/" method="POST"', $arResult["FORM_HEADER"]) ?>

        <div class="contact-form__form-inputs">
            <?
            foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)
            {
            if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden')
            {
                echo $arQuestion["HTML_CODE"];
            }
            else
            {
            ?>

            <? if (($arQuestion['STRUCTURE'][0]['ID'] == "5")){
            ?>
        </div>
        <div class="contact-form__form-message">
            <div class="input">
                <label class="input__label" for="medicine_message">
                    <div class="input__label-text"><?= $arQuestion["CAPTION"] ?><? if ($arQuestion["REQUIRED"] == "Y"):?><?= $arResult["REQUIRED_SIGN"]; ?><?endif; ?></div>
                    <?= str_replace('<textarea', '<textarea class="input__input"', $arQuestion["HTML_CODE"]); ?>
                </label>
            </div>

            <?
            } else {
                ?>
                <div class="input contact-form__input"><label class="input__label" for="medicine_name">
                        <div class="input__label-text"><?= $arQuestion["CAPTION"] ?><? if ($arQuestion["REQUIRED"] == "Y"):?><?= $arResult["REQUIRED_SIGN"]; ?><?endif; ?></div>
                        <?= str_replace('<input', '<input class="input__input"', $arQuestion["HTML_CODE"]); ?>
                        <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                    </label></div>
            <?
            } ?>

            <?
            }
            } //endwhile
            ?>
        </div>

        <div class="contact-form__bottom">
            <div class="contact-form__bottom-policy">Нажимая &laquo;Отправить&raquo;, Вы&nbsp;подтверждаете, что
                ознакомлены, полностью согласны и&nbsp;принимаете условия &laquo;Согласия на&nbsp;обработку персональных
                данных&raquo;.
            </div>
            <input class="form-button contact-form__bottom-button" <?= (intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : ""); ?>
                   type="submit" name="
                web_form_submit" value="Оставить заявку"/>
        </div>
        </form>
    </div>


    <?
} //endif (isFormNote)