import { PlaceholderPattern } from '@/components/ui/placeholder-pattern';
import AppLayout from '@/layouts/app-layout';
import { Head } from '@inertiajs/react';

export default function OurRooms() {
    return (
        <AppLayout>
            <Head title="Our Rooms" />
            <main className="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
                <div className="border-sidebar-border/70 dark:border-sidebar-border relative aspect-video h-[35vh] overflow-hidden rounded-xl border">
                    <PlaceholderPattern className="absolute inset-0 size-full stroke-neutral-900/20 dark:stroke-neutral-100/20" />
                    <div className="absolute inset-0 flex items-center justify-center">
                        <h1 className="text-4xl font-bold">Our Rooms</h1>
                    </div>
                </div>
            </main>
        </AppLayout>
    );
}
