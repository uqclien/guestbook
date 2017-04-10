## Pages
- The home page `/` only has a form with two fields (`message` and `name`) and a submit button.
- A user is not be able to submit a new entry without filling in both the `name` and `message` fields.
    - The minimum character count for both fields is **2** characters.
    - The maximum character count for `name` is **50** characters.
    - The maximum character count for `message` is **140** characters.
- All guestbook entries are viewable at `/entries` and paginated (10 per page).
- Individual entries is viewable at `/entries/{entries}` where `{entries}` is the entry record's ID.

## Apis
- `/api/entries` returns a list of all entries in JSON format.
- `/api/entries/special`  returns a list of all entries in JSON format with the following modifications:
    - Each message is reversed, e.g. "What a cool app!" becomes "!ppa looc a tahW"
    - Each name is capitalized, e.g. "John" becomes "JOHN".