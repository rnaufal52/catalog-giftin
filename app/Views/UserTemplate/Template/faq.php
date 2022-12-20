<section>
    <div class="row text-center mt-5 mb-5">
        <h5>FAQs</h4>
        <h1 class="text-success">Frequently asked questions</h1>
        <p class="mt-3">Punya pertanyaan ? Kami disini untuk membantu.</p>
    </div>
    <div class="row">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <?php $a = 1; $b = 1; $c = 1; $d = 1; $e = 1; ?>
            <?php foreach ($faq as $faq) : ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading-<?php $a++; ?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?= $c++?>" aria-expanded="false" aria-controls="flush-collapse-<?= $d++?>">
                        <?= $faq['faq_questions'];  ?>
                    </button>
                    </h2>
                    <div id="flush-collapse-<?= $e++?>" class="accordion-collapse collapse" aria-labelledby="flush-heading-<?php $b++; ?>" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body"><?= $faq['faq_answer'];  ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>