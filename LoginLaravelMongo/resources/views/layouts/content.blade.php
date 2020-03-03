<aside>
    <h4>sideBar</h4>
    <ol>
        <li>one</li>
        <li>two
            <ol>
                <li>one sub</li>
                <li>two sub</li>
                <li>three sub</li>
            </ol>
        </li>
        <li>three
            <ol>
                <li>one sub</li>
                <li>two sub
                    <ol>
                        <li>one sub sub </li>
                        <li>two sub sub </li>
                    </ol>
                </li>
            </ol>
        </li>
        <li>four</li>
    </ol>
</aside>
<section>

    <header class="sectionHeader flexContent">
        <i class="flexContainer" v-bind:style="{visibility: leftArrowVisibillity }">&lt</i>
        <h2 v-text="topicNameHeaderWithArrows"></h2>
        <i class="flexContainer">&gt</i>
    </header>
    <article>
        <my-component></my-component>
        <h3 v-text="subTopicName"></h3>
        <p v-text="descriptionSubTopic"></p>

    </article>
    <hr/>
</section>