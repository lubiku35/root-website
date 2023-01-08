
const blog_search = document.querySelector('#blog-search');

blog_search.addEventListener('keyup', filterPosts);

function filterPosts() {
    let filter_value = blog_search.value.toLowerCase();
    const posts = 
    document.querySelectorAll('.article').forEach(post => {
        post.innerText.toLowerCase().indexOf(filter_value) > -1
        ? post.style.display = '' // true
        : post.style.display = 'none'; // false
    })
}