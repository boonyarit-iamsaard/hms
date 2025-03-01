import { PlaceholderPattern } from '@/components/ui/placeholder-pattern';
import AppLayout from '@/layouts/app-layout';
import type { RoomType } from '@/types';
import { Head, usePage } from '@inertiajs/react';
import { Image as ImageIcon } from 'lucide-react';

type OurRoomsProps = {
    roomTypes: RoomType[];
};

export default function OurRooms() {
    const { roomTypes } = usePage<OurRoomsProps>().props;

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

                <div className="flex flex-col gap-4">
                    {roomTypes.map((roomType) => (
                        <div
                            key={roomType.id}
                            className="border-sidebar-border/70 dark:border-sidebar-border flex flex-col gap-4 rounded-xl border lg:flex-row"
                        >
                            <div className="border-sidebar-border/70 dark:border-sidebar-border relative aspect-video w-full overflow-hidden rounded-t-xl border-b lg:aspect-square lg:w-64 lg:rounded-l-xl lg:rounded-tr-none lg:border-r lg:border-b-0">
                                <PlaceholderPattern className="absolute inset-0 size-full stroke-neutral-900/20 dark:stroke-neutral-100/20" />
                                <div className="absolute inset-0 flex items-center justify-center">
                                    <ImageIcon className="size-10 text-neutral-400" strokeWidth={1.5} />
                                </div>
                            </div>
                            <div className="flex flex-1 flex-col gap-4 p-4 lg:p-6">
                                <h2 className="text-2xl font-medium">{roomType.name}</h2>
                                {roomType.description && <p className="text-neutral-500">{roomType.description}</p>}
                                <div className="mt-auto">
                                    <p className="text-sm text-neutral-500">
                                        {roomType.rooms_count} room{roomType.rooms_count === 1 ? '' : 's'} available
                                    </p>
                                </div>
                            </div>
                        </div>
                    ))}
                </div>
            </main>
        </AppLayout>
    );
}
