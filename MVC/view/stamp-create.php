

<main>
    <header>
        <h2>Create Stamp</h2>
    </header>
    <form action="{{ path}}/stamp/store" method="post">
        <label>Name:
            <input type="text" name="name" required>
        </label>
        <label>Origin:
            <input type="text" name="origin">
        </label>
        <label>Year:
            <input type="year" name="year">
        </label>
        <section>
            <div>
                <h4>choose from our categories</h4>
                {% for category in categories%}
                <label>{{ category.category }}
                    <input type="checkbox" name="category_id[{{ category.id }}]" value="1">
                </label>
                {% endfor%}
            </div>


        </section>

        </label>
        <label>Aspect:
            <select name="aspect_id">
                {% for aspect in aspects %}
                <option value="{{ aspect.id }}">{{ aspect.aspect }}</option>
                {% endfor %}
            </select>
        </label>
        <label>description:
            <textarea name="description" cols="30" rows="10"></textarea>
        </label>
        <label>User
            <select name="user_id">
            {% for user in users %}
                    <option value="{{ user.id }}">{{ user.name }}</option>
            {% endfor %}
            </select>
        </label>
        <input type="submit" value="create" class="button">
    </form>
    <div>
        <h4>Or create your own category</h4>
        <form action="{{ path }}category/store" method="post">
        <label>{{ category.category }}
            <input type="text" name="category">
        </label>
        <input type="submit" value="create">
        </form>
    </div>
</main>
