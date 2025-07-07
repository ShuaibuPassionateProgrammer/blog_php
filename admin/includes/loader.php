<style>
    .loader {
        position: fixed;
        top: 0; left: 0; width: 100vw; height: 100vh;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .loading {
        padding: 20px 40px;
        border: 3px solid #282828;
        border-radius: 8px;
        font-size: 1.5rem;
        font-weight: bold;
        color: #282828;
        background-color: #eaeaea;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
</style>

<div class="loader" role="status" aria-live="polite">
    <div class="loading">Loading...</div>
</div>

<script>
    window.addEventListener('load', () => {
        document.querySelector('.loader').style.display = 'none';
    });
</script>