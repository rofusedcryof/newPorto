<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['nama'] }} - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-100">
    <div class="pointer-events-none fixed inset-0">
        <div class="absolute -top-24 left-1/2 h-72 w-72 -translate-x-1/2 rounded-full bg-cyan-500/20 blur-3xl"></div>
        <div class="absolute -bottom-24 right-10 h-72 w-72 rounded-full bg-fuchsia-500/20 blur-3xl"></div>
    </div>

    <div class="mx-auto max-w-6xl px-6 py-10">
        <header class="flex flex-col gap-8 md:flex-row md:items-center md:justify-between">
            <div class="flex items-center gap-5">
                <div class="relative">
                    @php($profilePhoto = $data['profile_photo'] ?? null)
                    @if ($profilePhoto && file_exists(public_path($profilePhoto)))
                        <img
                            class="h-20 w-20 rounded-2xl object-cover ring-1 ring-white/10"
                            src="{{ asset($profilePhoto) }}"
                            alt="Foto Profil"
                            onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name={{ urlencode($data['nama'] ?? '') }}&background=0D8ABC&color=fff&size=160';"
                        >
                    @else
                        <img class="h-20 w-20 rounded-2xl ring-1 ring-white/10" src="https://ui-avatars.com/api/?name={{ urlencode($data['nama']) }}&background=0D8ABC&color=fff&size=160" alt="Foto Profil">
                    @endif
                    <div class="absolute -bottom-2 -right-2 h-6 w-6 rounded-full bg-emerald-400 ring-4 ring-slate-950"></div>
                </div>

                <div>
                    <h1 class="text-3xl font-semibold tracking-tight text-white md:text-4xl">{{ $data['nama'] }}</h1>
                    <p class="mt-1 text-sm text-slate-300 md:text-base">
                        {{ $data['program_studi'] }} • {{ $data['universitas'] }}
                    </p>
                </div>
            </div>

            <div class="flex flex-wrap gap-3">
                <a class="inline-flex items-center justify-center rounded-xl bg-white/10 px-4 py-2 text-sm font-medium text-white ring-1 ring-white/10 backdrop-blur hover:bg-white/15" href="{{ $data['kontak']['linkedin'] }}" target="_blank" rel="noopener noreferrer">LinkedIn</a>
                <a class="inline-flex items-center justify-center rounded-xl bg-white/10 px-4 py-2 text-sm font-medium text-white ring-1 ring-white/10 backdrop-blur hover:bg-white/15" href="{{ $data['kontak']['github'] }}" target="_blank" rel="noopener noreferrer">GitHub</a>
                <a class="inline-flex items-center justify-center rounded-xl bg-white/10 px-4 py-2 text-sm font-medium text-white ring-1 ring-white/10 backdrop-blur hover:bg-white/15" href="#contact">Email</a>
                <a class="inline-flex items-center justify-center rounded-xl bg-emerald-500/90 px-4 py-2 text-sm font-medium text-white hover:bg-emerald-500" href="{{ $data['kontak']['whatsapp'] }}" target="_blank" rel="noopener noreferrer">WhatsApp</a>
            </div>
        </header>

        <main class="mt-10 grid gap-6 lg:grid-cols-3">
            <section class="rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 lg:col-span-2">
                <h2 class="text-lg font-semibold text-white">About Me</h2>
                <p class="mt-3 text-sm leading-7 text-slate-300 md:text-base">{{ $data['deskripsi_singkat'] }}</p>

                <div class="mt-6 flex flex-wrap gap-2">
                    <span class="inline-flex items-center gap-2 rounded-full bg-white/5 px-3 py-1 text-xs font-medium text-slate-200 ring-1 ring-white/10">
                        Focus
                        <span class="rounded-full bg-cyan-400/20 px-2 py-0.5 text-cyan-200 ring-1 ring-cyan-400/30">{{ $data['fokus_utama'] }}</span>
                    </span>
                </div>
            </section>

            <section class="rounded-2xl bg-white/5 p-6 ring-1 ring-white/10">
                <h2 class="text-lg font-semibold text-white">Skillset</h2>
                <div class="mt-4 flex flex-wrap gap-2">
                    @foreach ($data['skills'] as $skill)
                        <span class="inline-flex items-center gap-2 rounded-xl bg-white/5 px-3 py-2 text-sm text-slate-200 ring-1 ring-white/10">
                            @if ($skill == $data['fokus_utama'])
                                <span class="text-amber-300">★</span>
                            @endif
                            {{ $skill }}
                        </span>
                    @endforeach
                </div>
            </section>

            <section class="rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 lg:col-span-3">
                <div class="flex flex-col gap-2 md:flex-row md:items-end md:justify-between">
                    <div>
                        <h2 class="text-lg font-semibold text-white">Highlights</h2>
                        <p class="mt-1 text-sm text-slate-300">Machine Learning • Web Development • Databases</p>
                    </div>
                </div>

                <div class="mt-5 grid gap-4 md:grid-cols-3">
                    <div class="rounded-2xl bg-slate-900/50 p-5 ring-1 ring-white/10">
                        <div class="text-sm font-semibold text-white">Machine Learning</div>
                        <div class="mt-2 text-sm text-slate-300">Modeling, experimentation, and practical ML use-cases.</div>
                    </div>
                    <div class="rounded-2xl bg-slate-900/50 p-5 ring-1 ring-white/10">
                        <div class="text-sm font-semibold text-white">Web Development</div>
                        <div class="mt-2 text-sm text-slate-300">Building clean UI and backend systems.</div>
                    </div>
                    <div class="rounded-2xl bg-slate-900/50 p-5 ring-1 ring-white/10">
                        <div class="text-sm font-semibold text-white">Databases</div>
                        <div class="mt-2 text-sm text-slate-300">Designing schemas and optimizing queries.</div>
                    </div>
                </div>
            </section>

            <section id="contact" class="rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 lg:col-span-3">
                <h2 class="text-lg font-semibold text-white">Contact Me</h2>
                <p class="mt-2 text-sm leading-7 text-slate-300 md:text-base">
                    I'm currently open to new opportunities, collaborations, or any questions you might have. You can reach out via the form or email.
                </p>

                <div class="mt-6 grid gap-6 lg:grid-cols-2">
                    <div class="space-y-3">
                        <div class="rounded-2xl bg-slate-900/50 px-5 py-4 ring-1 ring-white/10">
                            <div class="min-w-0">
                                <div class="text-xs font-semibold tracking-wide text-slate-400">EMAIL</div>
                                <div class="mt-1 truncate text-sm font-medium text-white md:text-base">{{ $data['kontak']['email'] }}</div>
                            </div>
                        </div>

                        <div class="rounded-2xl bg-slate-900/50 px-5 py-4 ring-1 ring-white/10">
                            <div class="min-w-0">
                                <div class="text-xs font-semibold tracking-wide text-slate-400">LOCATION</div>
                                <div class="mt-1 truncate text-sm font-medium text-white md:text-base">{{ $data['lokasi'] }}</div>
                            </div>
                        </div>
                    </div>

                    <form
                        action="https://formspree.io/f/mjggvkwl"
                        method="POST"
                        class="space-y-4 rounded-2xl bg-slate-900/50 p-5 ring-1 ring-white/10"
                    >
                        <div class="space-y-1">
                            <label class="text-xs font-semibold tracking-wide text-slate-300">
                                Your email
                                <input
                                    type="email"
                                    name="email"
                                    required
                                    class="mt-1 w-full rounded-xl border border-white/10 bg-slate-950/60 px-3 py-2 text-sm text-slate-100 placeholder-slate-500 outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400"
                                >
                            </label>
                        </div>

                        <div class="space-y-1">
                            <label class="text-xs font-semibold tracking-wide text-slate-300">
                                Your message
                                <textarea
                                    name="message"
                                    required
                                    rows="4"
                                    class="mt-1 w-full rounded-xl border border-white/10 bg-slate-950/60 px-3 py-2 text-sm text-slate-100 placeholder-slate-500 outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400"
                                ></textarea>
                            </label>
                        </div>

                        <button
                            type="submit"
                            class="inline-flex w-full items-center justify-center rounded-xl bg-cyan-500 px-4 py-2 text-sm font-semibold text-slate-950 hover:bg-cyan-400"
                        >
                            Send
                        </button>
                    </form>
                </div>
            </section>
        </main>

        <footer class="mt-10 text-center text-xs text-slate-400">
            <span class="text-slate-300">{{ $data['nama'] }}</span> • Built with Laravel
        </footer>
    </div>
</body>
</html>
